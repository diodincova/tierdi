<?php
use App\App;
use App\Container;

spl_autoload_register();
array_shift($argv);

$app = new App(new Container());
echo $app->run($argv);
