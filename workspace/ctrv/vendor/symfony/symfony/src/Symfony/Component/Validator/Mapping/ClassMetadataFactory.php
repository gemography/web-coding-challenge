<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator\Mapping;

use Symfony\Component\Validator\Mapping\Loader\LoaderInterface;
use Symfony\Component\Validator\Mapping\Cache\CacheInterface;

/**
 * Implementation of ClassMetadataFactoryInterface
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ClassMetadataFactory implements ClassMetadataFactoryInterface
{
    /**
     * The loader for loading the class metadata
     * @var LoaderInterface
     */
    protected $loader;

    /**
     * The cache for caching class metadata
     * @var CacheInterface
     */
    protected $cache;

    protected $loadedClasses = array();

    public function __construct(LoaderInterface $loader = null, CacheInterface $cache = null)
    {
        $this->loader = $loader;
        $this->cache = $cache;
    }

    public function getClassMetadata($class)
    {
        $class = ltrim($class, '\\');

        if (isset($this->loadedClasses[$class])) {
            return $this->loadedClasses[$class];
        }

        if (null !== $this->cache && false !== ($this->loadedClasses[$class] = $this->cache->read($class))) {
            return $this->loadedClasses[$class];
        }

        $metadata = new ClassMetadata($class);

        // Include constraints from the parent class
        if ($parent = $metadata->getReflectionClass()->getParentClass()) {
            $metadata->mergeConstraints($this->getClassMetadata($parent->name));
        }

        // Include constraints from all implemented interfaces
        foreach ($metadata->getReflectionClass()->getInterfaces() as $interface) {
            if ('Symfony\Component\Validator\GroupSequenceProviderInterface' === $interface->name) {
                continue;
            }
            $metadata->mergeConstraints($this->getClassMetadata($interface->name));
        }

        if (null !== $this->loader) {
            $this->loader->loadClassMetadata($metadata);
        }

        if (null !== $this->cache) {
            $this->cache->write($metadata);
        }

        return $this->loadedClasses[$class] = $metadata;
    }
}
