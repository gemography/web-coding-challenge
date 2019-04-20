<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Tests\Matcher;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\ApacheUrlMatcher;

class ApacheUrlMatcherTest extends \PHPUnit_Framework_TestCase
{
    protected $server;

    protected function setUp()
    {
        $this->server = $_SERVER;
    }

    protected function tearDown()
    {
        $_SERVER = $this->server;
    }

    /**
     * @dataProvider getMatchData
     */
    public function testMatch($name, $pathinfo, $server, $expect)
    {
        $collection = new RouteCollection();
        $context = new RequestContext();
        $matcher = new ApacheUrlMatcher($collection, $context);

        $_SERVER = $server;

        $result = $matcher->match($pathinfo, $server);
        $this->assertSame(var_export($expect, true), var_export($result, true));
    }

    public function getMatchData()
    {
        return array(
            array(
                'Simple route',
                '/hello/world',
                array(
                    '_ROUTING__route' => 'hello',
                    '_ROUTING__controller' => 'AcmeBundle:Default:index',
                    '_ROUTING_name' => 'world',
                ),
                array(
                    '_route' => 'hello',
                    '_controller' => 'AcmeBundle:Default:index',
                    'name' => 'world',
                ),
            ),
            array(
                'Route with params and defaults',
                '/hello/hugo',
                array(
                    '_ROUTING__route' => 'hello',
                    '_ROUTING__controller' => 'AcmeBundle:Default:index',
                    '_ROUTING_name' => 'hugo',
                    '_ROUTING_DEFAULTS_name' => 'world',
                ),
                array(
                    'name' => 'hugo',
                    '_route' => 'hello',
                    '_controller' => 'AcmeBundle:Default:index',
                ),
            ),
            array(
                'Route with defaults only',
                '/hello',
                array(
                    '_ROUTING__route' => 'hello',
                    '_ROUTING__controller' => 'AcmeBundle:Default:index',
                    '_ROUTING_DEFAULTS_name' => 'world',
                ),
                array(
                    'name' => 'world',
                    '_route' => 'hello',
                    '_controller' => 'AcmeBundle:Default:index',
                ),
            ),
            array(
                'REDIRECT_ envs',
                '/hello/world',
                array(
                    'REDIRECT__ROUTING__route' => 'hello',
                    'REDIRECT__ROUTING__controller' => 'AcmeBundle:Default:index',
                    'REDIRECT__ROUTING_name' => 'world',
                ),
                array(
                    '_route' => 'hello',
                    '_controller' => 'AcmeBundle:Default:index',
                    'name' => 'world',
                ),
            ),
        );
    }
}
