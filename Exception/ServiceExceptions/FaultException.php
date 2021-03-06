<?php

namespace QuickBooks\Exception\ServiceExceptions;

use QuickBooks\Exception\ServiceException;

/**
 * Represents a Fault Exception.
 */
class FaultException extends ServiceException
{
    /**
     * Initializes a new instance of the FaultException class.
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
