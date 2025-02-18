<?php

use App\Controllers\portfoliosController;
use App\Controllers\welcomeController;
use App\Base\Router;

Router::get('/',[welcomeController::class,'hello']);

Router::get('portfolio/',[portfoliosController::class,'index']);

