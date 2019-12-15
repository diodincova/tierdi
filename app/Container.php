<?php

namespace App;

use App\Service\IntrovertService;

class Container
{
    /** @var array */
    private $dependencies;

    public function __construct()
    {
        $this->dependencies = [];

        $this->dependencies[IntrovertService::class] = new Dependency(IntrovertService::class, [__DIR__.'/../name.txt']);
    }

    public function get($key)
    {
        if (!isset($this->services[$key])) {
            $this->dependencies[$key] = $this->create($key);
        }

        return $this->dependencies[$key];
    }

    private function create(string $serviceName)
    {
        return $this->dependencies[$serviceName]->resolve();
    }
}