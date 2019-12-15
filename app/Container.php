<?php

namespace App;

use App\Service\IntrovertService;

class Container
{
    /** @var array */
    private $dependencies;
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function get($serviceName)
    {
        if(!$this->dependencies[$serviceName]) {
            $this->dependencies[$serviceName] = new Dependency(
                $this->config[$serviceName]['class'],
                $this->config[$serviceName]['constructorArgs']
            );
        }

        return $this->dependencies[$serviceName]->resolve();
    }
}