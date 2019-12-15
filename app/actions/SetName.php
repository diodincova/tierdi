<?php

namespace App\Actions;

class SetName
{
    public function exec($args)
    {
        $file = "name.txt";

        file_put_contents($file, $args);

        return "OK\n";
    }
}