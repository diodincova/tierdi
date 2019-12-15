<?php

namespace App\Actions;

class SayHello
{
    public function exec(string $file, array $args): string
    {
        if(file_exists($file)) {
            $name = file_get_contents($file);
            return "Hello, $name\n";
        }

        return "Oh no! First, '$ php main.php setName <name>', please\n";
    }
}