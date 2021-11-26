<?php
require __DIR__ . '/../vendor/autoload.php';

use Fize\Framework\App;
$app = new App();
$app->run();

//$config = [
//    'root_path' => dirname(dirname(__FILE__))
//];
//
//$app = new App($config);
//$app->run();