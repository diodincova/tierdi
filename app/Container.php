<?php

namespace App;

use App\Service\IntrovertService;

class Container
{
    /** @var array */
    private $services;

    public function __construct()
    {
        $this->services = [];
        $this->services[IntrovertService::class] = new IntrovertService(__DIR__.'/../name.txt');
    }

    public function get($key)
    {
        return $this->services[$key];
    }
}