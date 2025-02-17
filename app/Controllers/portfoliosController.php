<?php 
namespace App\Controllers;

use App\Base\Controller;

class portfoliosController extends Controller{

    public function index(){
        //$this->views('portfolios/index.php');
        views('portfolios/index.php');
    }

}