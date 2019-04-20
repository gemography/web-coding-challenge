<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\Bundle\AsseticBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;

/**
 * Adds a few formats to each request.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class RequestListener
{
    public function onKernelRequest(GetResponseEvent $event)
    {
        $request = $event->getRequest();

        $request->setFormat('png', 'image/png');
        $request->setFormat('jpg', 'image/jpeg');
        $request->setFormat('gif', 'image/gif');
    }
}
