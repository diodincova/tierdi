<?php
use App\App;
use App\Container;

spl_autoload_register();
$config = require 'config/services.php';
array_shift($argv);

$app = new App(new Container($config));
echo $app->run($argv);
