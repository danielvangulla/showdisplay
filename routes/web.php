<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
    // return view('dashboard');
// });

route::get('/', 'HomeController@home');
route::get('/map/{no}', 'HomeController@map');

route::get('/bencana/banjir', 'HomeController@banjir');
route::get('/bencana/longsor', 'HomeController@longsor');
route::get('/bencana/lingkungan', 'HomeController@lingkungan');