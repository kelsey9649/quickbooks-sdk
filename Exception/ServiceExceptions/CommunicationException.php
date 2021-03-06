<?php

namespace QuickBooks\Exception\ServiceExceptions;

use QuickBooks\Exception\ServiceException;

/**
 * Represents an exception raised while communicating with IDS services.
 */
class CommunicationException extends ServiceException
{
    /**
     * Initializes a new instance of the CommunicationException class.
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
