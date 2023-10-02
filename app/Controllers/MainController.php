<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function index()
    {
        //
    }

    public function nice()
    {
        return view('view');
    }
    public function fasion()
    {

        return view ('fasion');

    }
    public function electronic()
    {
        
        return view ('electronic');

    }
    public function jewelry()
    {
        return view ('jewelry');

    }
}
