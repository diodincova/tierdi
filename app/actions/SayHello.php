<?php

namespace App\Actions;

use App\Service\IntrovertService;

class SayHello
{
    /** @var IntrovertService */
    private $service;

    public function __construct(IntrovertService $introvertService)
    {
        $this->service = $introvertService;
    }

    public function exec(): string
    {
        if($name = $this->service->read()) {
            return "Hello, $name\n";
        }

        return "Oh no! First, '$ php main.php setName <name>', please\n";
    }
}