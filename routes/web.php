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
//     return view('welcome');
// });

Route::get('/', function () {

	//$config = array();
    $config['center'] = 'New York, USA';
    $config['zoom'] = '14';
    $config['map_height'] = '500px';
    //$config['map_width'] = '500px';
    $config['scrollwheel'] = false;
    
    GMaps::initialize($config);
    GMaps::initialize($config);

    $map = GMaps::create_map();

    return view('welcome')->with('map',$map);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
