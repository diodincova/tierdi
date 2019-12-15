<?php

namespace App\Actions;

use App\Service\IntrovertService;

class SayHello
{
    public function exec(IntrovertService $introvertService): string
    {
        if($name = $introvertService->read()) {
            return "Hello, $name\n";
        }

        return "Oh no! First, '$ php main.php setName <name>', please\n";
    }

    public function getArgs()
    {
        return [IntrovertService::class];
    }
}