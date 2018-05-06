<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMapsServiceProvider;
use	FarhanWazir\GoogleMaps\Facades\GMapsFacade;

class DashboardController extends Controller
{
	public function index()
	{
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

	}
	public function chooses()
	{
		
	}

}
