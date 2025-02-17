<?php

use App\Controllers\portfoliosController;
use App\Controllers\welcomeController;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get(BASE_DIR. '/',[welcomeController::class,'hello']);

SimpleRouter::get(BASE_DIR. '/portfolio/',[portfoliosController::class,'index']);

