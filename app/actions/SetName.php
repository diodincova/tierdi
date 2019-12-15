<?php

namespace App\Actions;

use App\Service\IntrovertService;

class SetName
{
    /** @var IntrovertService */
    private $service;

    public function __construct(IntrovertService $introvertService)
    {
        $this->service = $introvertService;
    }

    public function exec($data)
    {
        if($this->service->write($data)) {
            return "OK\n";
        }

        return "Error while saving\n";
    }
}