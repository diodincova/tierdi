<?php

namespace App\Actions;

use App\Service\ServiceInterface;

class SayHello
{
    /** @var ServiceInterface */
    private $service;

    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }

    public function exec(): string
    {
        if($name = $this->service->read()) {
            return "Hello, $name\n";
        }

        return "Oh no! First, '$ php main.php setName <name>', please\n";
    }
}