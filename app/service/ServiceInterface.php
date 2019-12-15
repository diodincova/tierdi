<?php

namespace App\Service;

interface ServiceInterface
{
    public function read();
    public function write($data);
}