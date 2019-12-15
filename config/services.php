<?php

use App\Service\IntrovertService;
use App\Actions\SayHello;
use App\Actions\SetName;

return [
    IntrovertService::class => [
        'class' => IntrovertService::class,
        'constructorArgs' => [__DIR__.'/../name.txt'],
    ],
    SayHello::class => [
        'class' => SayHello::class,
        'constructorArgs' => ['@' . IntrovertService::class],
    ],
    SetName::class => [
        'class' => SetName::class,
        'constructorArgs' => ['@' . IntrovertService::class],
    ],
];
