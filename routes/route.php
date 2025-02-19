<?php

use App\Controllers\portfoliosController;
use App\Controllers\welcomeController;
use App\Controllers\contactsController;
use App\Base\Router;

Router::get('/',[welcomeController::class,'hello']);

Router::get('portfolio/',[portfoliosController::class,'index']);

Router::get('contact/',[contactsController::class,'info']);