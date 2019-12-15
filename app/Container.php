<?php

namespace App;

use App\Service\IntrovertService;

class Container
{
    /** @var array */
    private $dependencies;
    private $config;

    public function __construct()
    {
        $this->config[IntrovertService::class] = [IntrovertService::class, [__DIR__.'/../name.txt']];
    }

    public function get($serviceName)
    {
        if(!$this->dependencies[$serviceName]) {
            $this->dependencies[$serviceName] = new Dependency(...$this->config[$serviceName]);
        }

        return $this->dependencies[$serviceName]->resolve();
    }
}