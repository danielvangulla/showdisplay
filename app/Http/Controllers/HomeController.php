<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function home()
	{
		$data = DB::select('select * from content_home');
		
		return View('dashboard', compact('data'));
	}
}
