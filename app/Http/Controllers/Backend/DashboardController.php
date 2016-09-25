<?php 

namespace App\Http\Controller\Backend;

class DashboardController extends Controller
{
  
  public function index () {
    return view('backend.dashboard');
  }
}