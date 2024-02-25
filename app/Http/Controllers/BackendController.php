<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function index(){
        $data = array();
        $data['total_properties'] = Property::count();;
        $data['residential'] = countWordOccurrences('list','type', 'residential');
        $data['commercial'] = countWordOccurrences('list','type', 'commercial');
        $data['fully_detached_duplex'] = countWordOccurrences('list','type', 'fully_detached_duplex');
        $data['semi_detached_duplex'] = countWordOccurrences('list','type', 'semi_detached_duplex');
        $data['terrace_duplex'] = countWordOccurrences('list','type', 'terrace_duplex');
        $data['bungalow'] = countWordOccurrences('list','type', 'bungalow');
        $data['apartment'] = countWordOccurrences('list','type', 'apartment');
        $data['maisonette'] = countWordOccurrences('list','type', 'maisonette');
        $data['penthouse'] = countWordOccurrences('list','type', 'penthouse');
        $data['residential_land'] = countWordOccurrences('list','type', 'residential_land');
        $data['commercial_land'] = countWordOccurrences('list','type', 'commercial_land');
        $data['office'] = countWordOccurrences('list','type', 'office');
        $data['abuja'] = countWordOccurrences('list','type', 'abuja');
        $data['lagos_island'] = countWordOccurrences('list','type', 'lagos_island');
        $data['lagos_mainland'] = countWordOccurrences('list','type', 'lagos_mainland');
        $data['ibadan'] = countWordOccurrences('list','type', 'ibadan');
        $data['dubai'] = countWordOccurrences('list','type', 'dubai');

        return view('backend.properties.dashboard', $data);
    }
}
