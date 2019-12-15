<?php

namespace App;

class App
{
    public function run(array $args)
    {
        $actionName = ucfirst(array_shift($args));
        $className = "App\\Actions\\$actionName";
        $filename = "name.txt";

        $class = new $className();
        return $class->exec($filename, $args);
    }
}