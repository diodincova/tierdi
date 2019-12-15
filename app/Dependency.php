<?php

namespace App;

class Dependency
{
    private $className;
    private $constructorArgs = [];

    public function __construct(string $className, array $constructorArgs)
    {
        $this->className = $className;
        $this->constructorArgs = $constructorArgs;
    }

    public function resolve()
    {
        return new ($this->className)(...$this->constructorArgs);
    }
}