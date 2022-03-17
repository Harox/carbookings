<?php

namespace App\Http\Controllers;

use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

  public function __construct(){
    $this->Middleware('auth');
    
  }
  
  // Dashboard
  public function dashboard(){
    $pageConfigs = ['pageHeader' => false];

    return view('/content/dashboard/dashboard-ecommerce', ['pageConfigs' => $pageConfigs]);
  }

}
