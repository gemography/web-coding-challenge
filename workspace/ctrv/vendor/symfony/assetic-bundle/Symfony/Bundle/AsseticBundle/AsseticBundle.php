<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\Bundle\AsseticBundle;

use Symfony\Bundle\AsseticBundle\DependencyInjection\Compiler\TemplateResourcesPass;
use Symfony\Bundle\AsseticBundle\DependencyInjection\Compiler\AssetFactoryPass;
use Symfony\Bundle\AsseticBundle\DependencyInjection\Compiler\AssetManagerPass;
use Symfony\Bundle\AsseticBundle\DependencyInjection\Compiler\CheckYuiFilterPass;
use Symfony\Bundle\AsseticBundle\DependencyInjection\Compiler\FilterManagerPass;
use Symfony\Bundle\AsseticBundle\DependencyInjection\Compiler\CheckCssEmbedFilterPass;
use Symfony\Bundle\AsseticBundle\DependencyInjection\Compiler\CheckClosureFilterPass;
use Symfony\Bundle\AsseticBundle\DependencyInjection\Compiler\TemplatingPass;
use Symfony\Bundle\AsseticBundle\DependencyInjection\Compiler\SprocketsFilterPass;
use Symfony\Bundle\AsseticBundle\DependencyInjection\Compiler\RouterResourcePass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Assetic integration.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class AsseticBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new TemplateResourcesPass());
        $container->addCompilerPass(new CheckClosureFilterPass());
        $container->addCompilerPass(new CheckCssEmbedFilterPass());
        $container->addCompilerPass(new CheckYuiFilterPass());
        $container->addCompilerPass(new SprocketsFilterPass());
        $container->addCompilerPass(new TemplatingPass());
        $container->addCompilerPass(new AssetFactoryPass());
        $container->addCompilerPass(new AssetManagerPass());
        $container->addCompilerPass(new FilterManagerPass());
        $container->addCompilerPass(new RouterResourcePass());
    }
}
