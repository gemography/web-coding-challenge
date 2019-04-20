<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Locale\Stub\DateFormat;

/**
 * Parser and formatter for day format
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 */
class DayTransformer extends Transformer
{
    /**
     * {@inheritDoc}
     */
    public function format(\DateTime $dateTime, $length)
    {
        return $this->padLeft($dateTime->format('j'), $length);
    }

    /**
     * {@inheritDoc}
     */
    public function getReverseMatchingRegExp($length)
    {
        return 1 === $length ? '\d{1,2}' : '\d{'.$length.'}';
    }

    /**
     * {@inheritDoc}
     */
    public function extractDateOptions($matched, $length)
    {
        return array(
            'day' => (int) $matched,
        );
    }
}
