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

Route::get('/way', function () {

    //$config = array();
    $config['center'] = 'Distrito Federal, BR';
    $config['zoom'] = '14';
    $config['map_height'] = '300px';
    $config['map_width'] =  '500px';

    $config['scrollwheel'] = false;

    $config['directions'] =  true;
    $config['directionsStart'] = "Asa Norte SQN 206 - Asa Norte, Brasília - DF";
    $config['directionsEnd'] = "Rua 35 Sul, Residencial Sevilla - Águas Claras, Brasília - DF";
    $config['directionsDivId'] =  'directionsDivId';
    
    GMaps::initialize($config);

    //addmarker
    $marker['position'] = 'Rodoviária do Plano Piloto - Eixo Rodoviário de Brasília - Brasília, DF';
    $marker['infowindow_content'] = '1 - Rodoviária do Plano Piloto!';
    $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
    
    GMaps::add_marker($marker);

    $marker2['position'] = 'Restaurante dos 13, Colônia Agrícola Samambaia - Taguatinga, Brasília - DF';
    $marker2['infowindow_content'] = '2 - Estação Concessionarias!';
    $marker2['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
    

    GMaps::add_marker($marker2);


    $map = GMaps::create_map();

    return view('way')->with('map',$map);
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
Route::get('/checkout', 'DashboardController@checkout')->name('checkout');
