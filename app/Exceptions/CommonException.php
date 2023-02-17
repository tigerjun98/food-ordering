<?php

namespace App\Exceptions;

use Exception;

class CommonException extends Exception
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

    public function render()
    {
        return request()->ajax() ? $this->handleAjaxResponse() : back()->with('fail', $this->message);
    }

    public function handleAjaxResponse(): \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
    {
        return makeResponse(422, $this->message,
            ['errors' => $this->inputError]
        );
    }
}
