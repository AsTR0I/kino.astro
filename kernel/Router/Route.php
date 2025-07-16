<?php

namespace App\Kernel\Router;

class Route
{
    public function __construct(
        private string $uri,
        private $action,
        private array $middlewares = [],
        private string $method,
        
    ) {}

    public static function get(string $uri, $action, array $middlewares = []): static
    {
        return new static($uri,  $action, $middlewares, 'GET', );
    }

    public static function post(string $uri, $action, array $middlewares = []): static
    {
        return new static($uri,  $action, $middlewares, 'POST', );
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

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }

    public function hasMiddlewares(): bool
    {
        return !empty($this->middlewares);
    }
}
