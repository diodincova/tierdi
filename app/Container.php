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

    public function get($serviceName)
    {
        return $this->dependencies[$serviceName]->resolve();
    }
}