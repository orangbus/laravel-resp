<?php

namespace App\Exceptions;

use App\Enum\ResponseEnum;
use Exception;

class BusinessException extends Exception
{
    public function __construct(string $message = ResponseEnum::ErrorMessage, $code = ResponseEnum::ErrorCode)
    {
        parent::__construct($message, $code);
    }
}
