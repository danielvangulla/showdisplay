<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function home()
	{
		return View('dashboard');
	}
	
    public function map1()
	{
		return View('map1');
	}
	
}
