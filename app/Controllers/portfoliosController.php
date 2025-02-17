<?php 
namespace App\Controllers;

use App\Base\Controller;
use App\Models\Portfolio;

class portfoliosController extends Controller{

    public function index(){
        //$this->views('portfolios/index.php');

        $portfolio = new Portfolio();
        $portfolios = $portfolio->get();

        return views('portfolios/index.php',['portfolios'=>$portfolios]);
    }

}