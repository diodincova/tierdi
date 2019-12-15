<?php

namespace App\Actions;

class SetName
{
    public function exec(string $file, array $args): string
    {
        file_put_contents($file, $args);

        return "OK\n";
    }
}