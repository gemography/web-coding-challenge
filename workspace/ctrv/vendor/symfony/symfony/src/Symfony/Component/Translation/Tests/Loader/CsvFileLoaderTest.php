<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Tests\Loader;

use Symfony\Component\Translation\Loader\CsvFileLoader;
use Symfony\Component\Config\Resource\FileResource;

class CsvFileLoaderTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        if (!class_exists('Symfony\Component\Config\Loader\Loader')) {
            $this->markTestSkipped('The "Config" component is not available');
        }
    }

    public function testLoad()
    {
        $loader = new CsvFileLoader();
        $resource = __DIR__.'/../fixtures/resources.csv';
        $catalogue = $loader->load($resource, 'en', 'domain1');

        $this->assertEquals(array('foo' => 'bar'), $catalogue->all('domain1'));
        $this->assertEquals('en', $catalogue->getLocale());
        $this->assertEquals(array(new FileResource($resource)), $catalogue->getResources());
    }

    public function testLoadDoesNothingIfEmpty()
    {
        $loader = new CsvFileLoader();
        $resource = __DIR__.'/../fixtures/empty.csv';
        $catalogue = $loader->load($resource, 'en', 'domain1');

        $this->assertEquals(array(), $catalogue->all('domain1'));
        $this->assertEquals('en', $catalogue->getLocale());
        $this->assertEquals(array(new FileResource($resource)), $catalogue->getResources());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testLoadThrowsAnExceptionIfFileNotExists()
    {
        $loader = new CsvFileLoader();
        $resource = __DIR__.'/../fixtures/not-exists.csv';
        $loader->load($resource, 'en', 'domain1');
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testLoadThrowsAnExceptionIfFileNotLocal()
    {
        $loader = new CsvFileLoader();
        $resource = 'http://example.com/resources.csv';
        $loader->load($resource, 'en', 'domain1');
    }
}
