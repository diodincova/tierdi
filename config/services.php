<?php

use App\Service\IntrovertService;

return [
    IntrovertService::class => [
        'class' => IntrovertService::class,
        'constructor_args' => [__DIR__.'/../name.txt'],
    ],
];
