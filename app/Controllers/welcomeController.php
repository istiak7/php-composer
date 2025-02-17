<?php 
namespace App\Controllers;

use App\Base\Controller;

class welcomeController extends Controller{

    public function hello(){
        //require_once VIEWS.'/index.php';
        //$this->views('index.php');
        views('index.php');
    }

}