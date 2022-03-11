<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
  
  // Dashboard
  public function dashboard(){
    $pageConfigs = ['pageHeader' => false];

    return view('/content/dashboard/dashboard-ecommerce', ['pageConfigs' => $pageConfigs]);
  }

}
