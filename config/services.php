<?php

use \App\Service\ServiceInterface;
use \App\Service\WorldService;
use App\Actions\SayHello;
use App\Actions\SetName;

return [
    ServiceInterface::class => [
        'class' => WorldService::class,
        'constructorArgs' => [__DIR__.'/../name.txt'],
    ],
    SayHello::class => [
        'class' => SayHello::class,
        'constructorArgs' => ['@' . ServiceInterface::class],
    ],
    SetName::class => [
        'class' => SetName::class,
        'constructorArgs' => ['@' . ServiceInterface::class],
    ],
];
