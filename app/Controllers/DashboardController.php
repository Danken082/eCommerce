<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        //
    }
    public function dashboard()
    {
      echo view('dashboard/dash');
    }
    public function chart()
    {
      return view('dashboard/chart');
    }
    public function widget()
    {
      return view('dashboard/widget');
    }
    public function table()
    {
      return view('dashboard/table');
    }


}
