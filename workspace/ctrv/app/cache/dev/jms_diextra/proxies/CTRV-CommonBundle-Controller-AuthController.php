<?php

namespace EnhancedProxy_ee6fac79da56355a10ef6bc08e6904ef95ba4432\__CG__\CTRV\CommonBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class AuthController extends \CTRV\CommonBundle\Controller\AuthController
{
    private $__CGInterception__loader;

    public function registerAction()
    {
        $ref = new \ReflectionMethod('CTRV\\CommonBundle\\Controller\\AuthController', 'registerAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}