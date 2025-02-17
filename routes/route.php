<?php

use App\Controllers\portfoliosController;
use App\Controllers\welcomeController;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('php-mvc/',[welcomeController::class,'hello']);

SimpleRouter::get('php-mvc/portfolio/',[portfoliosController::class,'index']);

