<?php

namespace App\Actions;

use App\Service\IntrovertService;

class SetName
{
    public function exec(IntrovertService $introvertService, $args)
    {
        if($introvertService->write($args)) {
            return "OK\n";
        }

        return "Error while saving\n";
    }

    public function getArgs()
    {
        return [IntrovertService::class];
    }
}