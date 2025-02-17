<?php

use Pecee\SimpleRouter\SimpleRouter;
require_once __DIR__.'/vendor/autoload.php';

define('ROOT',__DIR__);
define ('VIEWS',__DIR__.'/views');

require_once 'routes/route.php';

SimpleRouter::setDefaultNamespace('\App\Controllers');

// Start the routing
SimpleRouter::start();
