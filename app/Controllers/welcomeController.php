<?php 
namespace App\Controllers;

use App\Base\Controller;

class welcomeController extends Controller{

    public function hello(){
        views('index.php');
    }

}