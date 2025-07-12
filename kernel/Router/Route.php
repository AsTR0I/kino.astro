<?php

namespace App\Kernel\Router;

class Route
{
    public function __construct(
        private string $uri,
        private $action,
        private string $method
    ) {}

    public static function get(string $uri, $action): static
    {
        return new static($uri,  $action, method: 'GET');
    }

    public static function post(string $uri, $action): static
    {
        return new static($uri,  $action, method: 'POST');
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getAction()
    {
        return $this->action;
    }
}
