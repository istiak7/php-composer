<?php

use Pecee\SimpleRouter\SimpleRouter;
require_once __DIR__.'/vendor/autoload.php';

//load from enviromment variables 
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

define('ROOT',__DIR__);
define ('VIEWS',__DIR__.'/views');
define('BASE_DIR',isset($_ENV['BASE_DIR']) ? $_ENV['BASE_DIR'] : ''); 
//var_dump($_ENV['BASE_DIR']);

require_once 'routes/route.php';

SimpleRouter::setDefaultNamespace('\App\Controllers');

// Start the routing
SimpleRouter::start();
