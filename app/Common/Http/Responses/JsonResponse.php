<?php

namespace App\Common\Http\Responses;

use Illuminate\Contracts\Support\Responsable;

class JsonResponse implements Responsable
{
    private string $status = 'success';

    private string $message = '';

    private int $code;

    private mixed $data;

    private array $headers = [];

    /**
     * @param mixed $data
     * @param int $code
     */
    public function __construct(mixed $data = [], int $code = 200)
    {
        $this->data = $data;
        $this->code = $code;
    }

    public function error(): static
    {
        $this->status = 'error';
        return $this;
    }

    public function setCode($code): static
    {
        $this->code = $code;
        return $this;
    }

    public function setHeaders(array $headers): static
    {
        $this->headers = $headers;
        return $this;
    }

    public function setMessage($message): static
    {
        $this->message = $message;
        return $this;
    }

    public function setData($data): static
    {
        $this->data = $data;
        return $this;
    }

    public function toResponse($request): \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
    {
        return response()->json([
            "status" => $this->status,
            "message" => $this->message,
            "data" => $this->data,
        ], $this->code, $this->headers);
    }
}
