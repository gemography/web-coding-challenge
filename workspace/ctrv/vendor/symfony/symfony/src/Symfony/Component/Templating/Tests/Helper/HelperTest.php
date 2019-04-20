<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Templating\Tests\Helper;

use Symfony\Component\Templating\Helper\Helper;

class HelperTest extends \PHPUnit_Framework_TestCase
{
    public function testGetSetCharset()
    {
        $helper = new ProjectTemplateHelper();
        $helper->setCharset('ISO-8859-1');
        $this->assertTrue('ISO-8859-1' === $helper->getCharset(), '->setCharset() sets the charset set related to this helper');
    }
}

class ProjectTemplateHelper extends Helper
{
    public function getName()
    {
        return 'foo';
    }
}
