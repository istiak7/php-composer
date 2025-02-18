<?php

/*

* This is the entry point of the application
* This file is responsible for loading the environment variables, autoloading the dependencies, and starting the routing
* The routing is done using the SimpleRouter library
* The SimpleRouter library is a lightweight PHP router that is easy to use and has a lot of features

*/
use Pecee\SimpleRouter\SimpleRouter;

/*

* Autoload the vendor
* This is the composer autoloader, it loads all the dependencies that are in the vendor folder
* If you are not using composer, you will need to require all the dependencies manually
* You can find the list of dependencies in the composer.json file

*/

require_once __DIR__ . '/vendor/autoload.php';

/*

* Load the environment variables
* This is a library that loads the environment variables from the .env file
* This is useful for storing sensitive information like database credentials
* The .env file is not included in the repository, so you will need to create it yourself   
                                                
*/
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

/*
* Define the constants
*/ 

define('ROOT', __DIR__);
define('VIEWS', __DIR__ . '/views');
define('ASSET_DIR', __DIR__ . '/assets');
define('BASE_DIR', isset($_ENV['BASE_DIR']) ? $_ENV['BASE_DIR'] : '');
define('URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/' . BASE_DIR);
define('ASSET_URL', URL . '/assets');

/* 

* This is where we define all the routes for the application 
* The routes are defined using the SimpleRouter library
* The routes are defined in the routes/route.php file

*/

require_once 'routes/route.php';

/*
*   Set the default namespace for the controllers
*   This is the namespace that will be used for all the controllers
*   If you are using a different namespace for the controllers, you can change it here
*   The controllers are stored in the app/Controllers folder
*/
SimpleRouter::setDefaultNamespace('\App\Controllers');

/*              
* This is where the routing starts
*/

SimpleRouter::start();