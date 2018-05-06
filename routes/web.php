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
    $config['center'] = 'Brasilia, BR';
    $config['zoom'] = '14';
    $config['map_height'] = '500px';
    //$config['map_width'] =  '500px';
    $config['scrollwheel'] = false;

    $config['directions'] =  true;
    $config['directionsStart'] = "UnB, Brasília";
    $config['directionsEnd'] = "Estação Central, Brasília";
    $config['directionsDivId'] =  'directionsDivId';


    
    GMaps::initialize($config);
    $map = GMaps::create_map();

    return view('welcome')->with('map',$map);
});

Auth::routes();
// Route::get('/home', function () {

//     //$this->load->library('googlemaps');   
//     //$config = array();
//     $config['center'] = 'Brasilia, BR';
//     $config['zoom'] = '14';
//     $config['map_height'] = '500px';
//     //$config['map_width'] =  '500px';
//     $config['scrollwheel'] = false;

//     $config['places'] = TRUE;
//     $config['placesAutocompleteInputID'] = 'myPlaceTextBox';
//     $config['placesAutocompleteBoundsMap'] = TRUE; // set results biased towards the maps viewport
//     $config['placesAutocompleteOnChange'] = 'alert(\'You selected a place\');';

    
//     GMaps::initialize($config);
//     $data['map'] =  GMaps::create_map();

    
//     //$this->load->view('home', $data);
//     return  view('home')->with('map',$data);

// });
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/choose', 'DashboardController@chooses')->name('chooses');
