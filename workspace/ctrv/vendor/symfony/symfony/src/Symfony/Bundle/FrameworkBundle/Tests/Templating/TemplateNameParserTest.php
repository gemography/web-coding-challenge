<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Tests\Templating;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser;
use Symfony\Bundle\FrameworkBundle\Templating\TemplateReference;

class TemplateNameParserTest extends TestCase
{
    protected $parser;

    protected function setUp()
    {
        $kernel = $this->getMock('Symfony\Component\HttpKernel\KernelInterface');
        $kernel
            ->expects($this->any())
            ->method('getBundle')
            ->will($this->returnCallback(function ($bundle) {
                if (in_array($bundle, array('SensioFooBundle', 'SensioCmsFooBundle', 'FooBundle'))) {
                    return true;
                }

                throw new \InvalidArgumentException();
            }))
        ;
        $this->parser = new TemplateNameParser($kernel);
    }

    protected function tearDown()
    {
        $this->parser = null;
    }

    /**
     * @dataProvider getLogicalNameToTemplateProvider
     */
    public function testParse($name, $ref)
    {
        $template = $this->parser->parse($name);

        $this->assertEquals($template->getLogicalName(), $ref->getLogicalName());
        $this->assertEquals($template->getLogicalName(), $name);
    }

    public function getLogicalNameToTemplateProvider()
    {
        return array(
            array('FooBundle:Post:index.html.php', new TemplateReference('FooBundle', 'Post', 'index', 'html', 'php')),
            array('FooBundle:Post:index.html.twig', new TemplateReference('FooBundle', 'Post', 'index', 'html', 'twig')),
            array('FooBundle:Post:index.xml.php', new TemplateReference('FooBundle', 'Post', 'index', 'xml', 'php')),
            array('SensioFooBundle:Post:index.html.php', new TemplateReference('SensioFooBundle', 'Post', 'index', 'html', 'php')),
            array('SensioCmsFooBundle:Post:index.html.php', new TemplateReference('SensioCmsFooBundle', 'Post', 'index', 'html', 'php')),
            array(':Post:index.html.php', new TemplateReference('', 'Post', 'index', 'html', 'php')),
            array('::index.html.php', new TemplateReference('', '', 'index', 'html', 'php')),
            array('FooBundle:Post:foo.bar.index.html.php', new TemplateReference('FooBundle', 'Post', 'foo.bar.index', 'html', 'php')),
        );
    }

    /**
     * @dataProvider      getInvalidLogicalNameProvider
     * @expectedException \InvalidArgumentException
     */
    public function testParseInvalidName($name)
    {
        $this->parser->parse($name);
    }

    public function getInvalidLogicalNameProvider()
    {
        return array(
            array('BarBundle:Post:index.html.php'),
            array('FooBundle:Post:index'),
            array('FooBundle:Post'),
            array('FooBundle:Post:foo:bar'),
        );
    }
}
