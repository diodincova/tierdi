<?php

namespace App;

class App
{
    /** @var Container */
    private $container;

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function run(array $data)
    {
        $actionName = ucfirst(array_shift($data));
        $className = "App\\Actions\\$actionName";

        $class = new $className();
        $classServices = $class->getArgs();
        $args = [];
        foreach ($classServices as $classService) {
            $args[] = $this->container->get($classService);
        }
        $args[] = $data;
        return $class->exec(...$args);
    }
}
