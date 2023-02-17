<?php

namespace App\Exceptions;

use Exception;

class CustomValidationException extends Exception
{
    public $message;
    public array $data;
    /**
     * @var array|mixed
     */
    private mixed $inputError;

    public function __construct($message, $inputError = [], Exception $previous = NULL)
    {
        $this->message = $message;
        $this->inputError = $inputError;
    }

    public function render(): \Illuminate\Http\JsonResponse
    {
        return makeResponse(422, $this->message,
            ['errors' => $this->inputError]
        );
    }
}
