<?php

namespace App;

class Dependency
{
    private $className;
    private $constructorArgs = [];
    private $service;

    public function __construct(string $className, array $constructorArgs)
    {
        $this->className = $className;
        $this->constructorArgs = $constructorArgs;
    }

    public function resolve()
    {
        if(!$this->service) {
            $this->service = new $this->className(...$this->constructorArgs);
        }

        return $this->service;
    }
}