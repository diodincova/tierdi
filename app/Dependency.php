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

    public function resolve(Container $container)
    {
        if(!$this->service) {
            $args = [];
            foreach ($this->constructorArgs as $arg) {
                if ($arg[0] === '@') {
                    $args[] = $container->get($arg);
                } else {
                    $args[] = $arg;
                }
            }
            $this->service = new $this->className(...$args);
        }

        return $this->service;
    }
}