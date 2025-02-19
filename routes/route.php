<?php

use App\Controllers\portfoliosController;
use App\Controllers\welcomeController;
use App\Controllers\contactsController;
use App\Controllers\postController;
use App\Controllers\postCreateController;
use App\Base\Router;

Router::get('/',[welcomeController::class,'hello']);

Router::get('portfolio/',[portfoliosController::class,'index']);

Router::get('contact/',[contactsController::class,'info']);

Router::get('post/',[postController::class,'post']);

Router::post('createpost/',[postCreateController::class,'store']);