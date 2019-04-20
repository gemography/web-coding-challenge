<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\Bundle\AsseticBundle\Controller;

use Assetic\ValueSupplierInterface;

use Assetic\Asset\AssetCache;
use Assetic\Asset\AssetInterface;
use Assetic\Factory\LazyAssetManager;
use Assetic\Cache\CacheInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Profiler\Profiler;

/**
 * Serves assets.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class AsseticController
{
    protected $request;
    protected $am;
    protected $cache;
    protected $enableProfiler;
    protected $profiler;
    protected $valueSupplier;

    public function __construct(Request $request, LazyAssetManager $am, CacheInterface $cache, $enableProfiler = false, Profiler $profiler = null)
    {
        $this->request = $request;
        $this->am = $am;
        $this->cache = $cache;
        $this->enableProfiler = (boolean) $enableProfiler;
        $this->profiler = $profiler;
    }

    public function setValueSupplier(ValueSupplierInterface $supplier)
    {
        $this->valueSupplier = $supplier;
    }

    public function render($name, $pos = null)
    {
        if (!$this->enableProfiler && null !== $this->profiler) {
            $this->profiler->disable();
        }

        if (!$this->am->has($name)) {
            throw new NotFoundHttpException(sprintf('The "%s" asset could not be found.', $name));
        }

        $asset = $this->am->get($name);
        if (null !== $pos && !$asset = $this->findAssetLeaf($asset, $pos)) {
            throw new NotFoundHttpException(sprintf('The "%s" asset does not include a leaf at position %d.', $name, $pos));
        }

        $response = $this->createResponse();
        $response->setExpires(new \DateTime());

        // last-modified
        if (null !== $lastModified = $asset->getLastModified()) {
            $date = new \DateTime();
            $date->setTimestamp($lastModified);
            $response->setLastModified($date);
        }

        // etag
        if ($this->am->hasFormula($name)) {
            $formula = $this->am->getFormula($name);
            $formula['last_modified'] = $lastModified;
            $response->setETag(md5(serialize($formula)));
        }

        if ($response->isNotModified($this->request)) {
            return $response;
        }

        $response->setContent($this->cachifyAsset($asset)->dump());

        return $response;
    }

    protected function createResponse()
    {
        return new Response();
    }

    protected function cachifyAsset(AssetInterface $asset)
    {
        if ($vars = $asset->getVars()) {
            if (null === $this->valueSupplier) {
                throw new \RuntimeException(sprintf('You must configure a value supplier if you have assets with variables.'));
            }

            $asset->setValues(array_intersect_key($this->valueSupplier->getValues(), array_flip($vars)));
        }

        return new AssetCache($asset, $this->cache);
    }

    private function findAssetLeaf(\Traversable $asset, $pos)
    {
        $i = 0;
        foreach ($asset as $leaf) {
            if ($pos == $i++) {
                return $leaf;
            }
        }
    }
}
