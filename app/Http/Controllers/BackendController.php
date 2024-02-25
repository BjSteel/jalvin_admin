<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        $data = array();
        $data['total_properties'] = Property::count();;
        $data['residential'] = countWordOccurrences('list','property_type', 'residential');
        $data['commercial'] = countWordOccurrences('list','property_type', 'commercial');
        $data['fully_detached_duplex'] = countWordOccurrences('list','property_type', 'fully_detached_duplex');
        $data['semi_detached_duplex'] = countWordOccurrences('list','property_type', 'semi_detached_duplex');
        $data['terrace_duplex'] = countWordOccurrences('list','property_type', 'terrace_duplex');
        $data['bungalow'] = countWordOccurrences('list','property_type', 'bungalow');
        $data['apartment'] = countWordOccurrences('list','property_type', 'apartment');
        $data['maisonette'] = countWordOccurrences('list','property_type', 'maisonette');
        $data['penthouse'] = countWordOccurrences('list','property_type', 'penthouse');
        $data['residential_land'] = countWordOccurrences('list','property_type', 'residential_land');
        $data['commercial_land'] = countWordOccurrences('list','property_type', 'commercial_land');
        $data['office'] = countWordOccurrences('list','property_type', 'office');
        $data['abuja'] = countWordOccurrences('list','property_type', 'abuja');
        $data['lagos_island'] = countWordOccurrences('list','property_type', 'lagos_island');
        $data['lagos_mainland'] = countWordOccurrences('list','property_type', 'lagos_mainland');
        $data['ibadan'] = countWordOccurrences('list','property_type', 'ibadan');
        $data['dubai'] = countWordOccurrences('list','property_type', 'dubai');

        return view('backend.properties.dashboard', $data);
    }
}
