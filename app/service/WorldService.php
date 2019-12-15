<?php

namespace App\Service;

class WorldService implements ServiceInterface
{
    public function read()
    {
        return 'world';
    }

    public function write($data)
    {
        return 0;
    }
}