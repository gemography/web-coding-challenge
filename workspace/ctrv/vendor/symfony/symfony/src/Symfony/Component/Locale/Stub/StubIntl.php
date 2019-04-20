<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Locale\Stub;

/**
 * Provides fake static versions of the global functions in the intl extension
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class StubIntl
{
    /**
     * Indicates that no error occurred
     *
     * @var integer
     */
    const U_ZERO_ERROR = 0;

    /**
     * Indicates that an invalid argument was passed
     *
     * @var integer
     */
    const U_ILLEGAL_ARGUMENT_ERROR = 1;

    /**
     * Indicates that the parse() operation failed
     *
     * @var integer
     */
    const U_PARSE_ERROR = 9;

    /**
     * All known error codes
     *
     * @var array
     */
    private static $errorCodes = array(
        self::U_ZERO_ERROR => 'U_ZERO_ERROR',
        self::U_ILLEGAL_ARGUMENT_ERROR => 'U_ILLEGAL_ARGUMENT_ERROR',
        self::U_PARSE_ERROR => 'U_PARSE_ERROR',
    );

    /**
     * The error code of the last operation
     *
     * @var integer
     */
    private static $errorCode = self::U_ZERO_ERROR;

    /**
     * The error code of the last operation
     *
     * @var integer
     */
    private static $errorMessage = 'U_ZERO_ERROR';

    /**
     * Returns whether the error code indicates a failure
     *
     * @param integer $errorCode The error code returned by StubIntl::getErrorCode()
     *
     * @return Boolean
     */
    public static function isFailure($errorCode)
    {
        return isset(self::$errorCodes[$errorCode])
            && $errorCode > self::U_ZERO_ERROR;
    }

    /**
     * Returns the error code of the last operation
     *
     * Returns StubIntl::U_ZERO_ERROR if no error occurred.
     *
     * @return integer
     */
    public static function getErrorCode()
    {
        return self::$errorCode;
    }

    /**
     * Returns the error message of the last operation
     *
     * Returns "U_ZERO_ERROR" if no error occurred.
     *
     * @return string
     */
    public static function getErrorMessage()
    {
        return self::$errorMessage;
    }

    /**
     * Returns the symbolic name for a given error code
     *
     * @param integer $code The error code returned by StubIntl::getErrorCode()
     *
     * @return string
     */
    public static function getErrorName($code)
    {
        if (isset(self::$errorCodes[$code])) {
            return self::$errorCodes[$code];
        }

        return '[BOGUS UErrorCode]';
    }

    /**
     * Sets the current error
     *
     * @param integer $code    One of the error constants in this class
     * @param string  $message The ICU class error message
     *
     * @throws \InvalidArgumentException If the code is not one of the error constants in this class
     */
    public static function setError($code, $message = '')
    {
        if (!isset(self::$errorCodes[$code])) {
            throw new \InvalidArgumentException(sprintf('No such error code: "%s"', $code));
        }

        self::$errorMessage = $message ? sprintf('%s: %s', $message, self::$errorCodes[$code]) : self::$errorCodes[$code];
        self::$errorCode = $code;
    }
}
