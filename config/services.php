<?php

use App\Service\IntrovertService;

return [
    IntrovertService::class => [
        'class' => IntrovertService::class,
        'constructorArgs' => [__DIR__.'/../name.txt'],
    ],
];
