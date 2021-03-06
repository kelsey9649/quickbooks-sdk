<?php

namespace QuickBooks\Exception;

/**
 * Represents an exception raised by the Intuit SDK.
 */
class SdkException extends IdsException
{
    /**
     * Initializes a new instance of the SdkException class.
     *
     * @param string $message string-based exception description
     * @param int|string $code exception code
     */
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }

    /**
     * Generates a string-based representation of the exception
     */
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
