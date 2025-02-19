<?php

namespace App\Controllers;
use App\Base\Controller;

class contactsController extends Controller
{
    public function info()
    {
        return views('contacts/index.php');
    }
}