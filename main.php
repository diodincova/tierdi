<?php
use App\App;

spl_autoload_register();
array_shift($argv);

$app = new App();
echo $app->run($argv);

