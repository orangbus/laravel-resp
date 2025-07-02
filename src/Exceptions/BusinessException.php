<?php

namespace VendorName\Skeleton\Exceptions;

use Exception;
use VendorName\Skeleton\Enum\ResponseEnum;

class BusinessException extends Exception
{
    public function __construct(string $message = ResponseEnum::ErrorMessage, $code = ResponseEnum::ErrorCode)
    {
        parent::__construct($message, $code);
    }
}
