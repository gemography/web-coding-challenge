<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator\Tests;

use Symfony\Component\Validator\ConstraintViolation;

class ConstraintViolationTest extends \PHPUnit_Framework_TestCase
{
    public function testToStringHandlesArrays()
    {
        $violation = new ConstraintViolation(
            '{{ value }}',
            array('{{ value }}' => array(1, 2, 3)),
            'Root',
            'property.path',
            null
        );

        $expected = <<<EOF
Root.property.path:
    Array
EOF;

        $this->assertSame($expected, (string) $violation);
    }
}
