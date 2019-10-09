<?php

namespace fize\framework;

require __DIR__ . '/../vendor/autoload.php';

$app = new App();
$app->run();

//$config = [
//    'root_path' => dirname(dirname(__FILE__))
//];
//
//new App($config);