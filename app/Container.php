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
        if (!isset($this->dependencies[$key])) {
            $this->dependencies[$key] = $this->dependencies[$key]->resolve();
        }

        return $this->dependencies[$key];
    }
}