<?php

namespace App\Actions;

use App\Service\ServiceInterface;

class SetName
{
    /** @var ServiceInterface */
    private $service;

    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }

    public function exec($data)
    {
        if($this->service->write($data)) {
            return "OK\n";
        }

        return "Error while saving\n";
    }
}