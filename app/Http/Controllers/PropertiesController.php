<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    public function add(Request $request) {
        if($request->isMethod('get')){
            return view('backend.properties.add');
        }else{
            $validator = Validator::make($request->all(), [
                'name'             => 'required',
                'address'             => 'required',
                'price'           => 'required',
                'city'           => 'required',
                'country'           => 'required',
                'beds'           => 'required',
                'baths' => 'required',
                'year'           => 'required',
                'size'           => 'required',
                'images' => 'required',
                'images.*' => 'mimes:jpeg,png,jpg'
            ]);
    
            if ($validator->fails()) {
                return redirect()->route('backend.properties.add')
                        ->withErrors($validator)
                        ->withInput();
            }
            $id = generateUniqueId();


            $images = array();
            foreach($request->file('images') as $file){
                $name=date('mdYHis').$file->getClientOriginalName();
                Storage::disk('ftp')->put('properties/'.$id.'/'.$name, fopen($file, 'r+'));
                array_push($images, $name);
            }

            $status = array();
            if ($request->input('ready_to_move') == 1) {
                array_push($status, 'ready_to_move_in');
            }
            if ($request->input('sold_out') == 1) {
                array_push($status, 'sold_out');
            }
            if ($request->input('open_house') == 1) {
                array_push($status, 'open_house');
            }
            if ($request->input('reduced_price') == 1) {
                array_push($status, 'reduced_price');
            }
            if ($request->input('resale') == 1) {
                array_push($status, 'resale');
            }
            if ($request->input('off_plan') == 1) {
                array_push($status, 'off-plan_project');
            }
            if ($request->input('new_listing') == 1) {
                array_push($status, 'new_listing');
            }
            if ($request->input('for_sale') == 1) {
                array_push($status, 'for_sale');
            }

            $type = array();
            if ($request->input('residential') == 1) {
                array_push($type, 'residential');
            }
            if ($request->input('commercial') == 1) {
                array_push($type, 'commercial');
            }
            if ($request->input('fully_detached_duplex') == 1) {
                array_push($type, 'fully_detached_duplex');
            }
            if ($request->input('semi_detatched_duplex') == 1) {
                array_push($type, 'semi_detatched_duplex');
            }
            if ($request->input('bungalow') == 1) {
                array_push($type, 'bungalow');
            }
            if ($request->input('penthouse') == 1) {
                array_push($type, 'penthouse');
            }
            if ($request->input('terrace') == 1) {
                array_push($type, 'terrace');
            }
            if ($request->input('apartment') == 1) {
                array_push($type, 'apartment');
            }
            if ($request->input('massiontte') == 1) {
                array_push($type, 'maisonette');
            }
            if ($request->input('residential_land') == 1) {
                array_push($type, 'residential_land');
            }
            if ($request->input('commercial_land') == 1) {
                array_push($type, 'commercial_land');
            }
            if ($request->input('office') == 1) {
                array_push($type, 'office');
            }

            $features = array();
            if ($request->input('fitted_kitchen') == 1) {
                array_push($features, 'fitted_kitchen_with_accessories');
            }
            if ($request->input('24_hour_security') == 1) {
                array_push($features, '24_hour_security');
            }
            if ($request->input('modern_pop_ceiling') == 1) {
                array_push($features, 'modern_day_pop_ceiling');
            }
            if ($request->input('detailed_finishing') == 1) {
                array_push($features, 'detailed_finishing');
            }
            if ($request->input('wardrobes') == 1) {
                array_push($features, 'wardrobes');
            }
            if ($request->input('jacuzzi') == 1) {
                array_push($features, 'jacuzzi');
            }
            if ($request->input('cctv') == 1) {
                array_push($features, 'cctv');
            }
            if ($request->input('automated_lights') == 1) {
                array_push($features, 'automated_light');
            }
            if ($request->input('water_heater') == 1) {
                array_push($features, 'water_heater');
            }
            if ($request->input('clean_water') == 1) {
                array_push($features, 'clean_water');
            }
            if ($request->input('heat_extractor') == 1) {
                array_push($features, 'heat_extractor');
            }
            if ($request->input('ample_parking_space') == 1) {
                array_push($features, 'ample_parking_space');
            }
            if ($request->input('gym') == 1) {
                array_push($features, 'gym');
            }
            if ($request->input('cinema') == 1) {
                array_push($features, 'cinema');
            }
            if ($request->input('swimming_pool') == 1) {
                array_push($features, 'swimming_pool');
            }
            if ($request->input('boys_quaters') == 1) {
                array_push($features, 'comes_with_boys_quarters');
            }
            if ($request->input('elevator') == 1) {
                array_push($features, 'elevator');
            }
            if ($request->input('installed_soundsystem') == 1) {
                array_push($features, 'installed_bluetooth_speakers');
            }
            if ($request->input('beach_front') == 1) {
                array_push($features, 'beach_front');
            }
            if ($request->input('gate_house') == 1) {
                array_push($features, 'gate_house');
            }
            if ($request->input('good_drainage') == 1) {
                array_push($features, 'good_drainage');
            }
            if ($request->input('lagoon_front_view') == 1) {
                array_push($features, 'lagoon_front_view');
            }
            if ($request->input('fully_furnished') == 1) {
                array_push($features, 'fully_furnished');
            }
            if ($request->input('air_conditioning') == 1) {
                array_push($features, 'air_conditioning');
            }
            if ($request->input('shildren_playgroud') == 1) {
                array_push($features, 'chilrens_playground');
            }
            if ($request->input('barbeque') == 1) {
                array_push($features, 'barbeque');
            }
            if ($request->input('spacious_compound') == 1) {
                array_push($features, 'spacious_compound');
            }
            if ($request->input('estate_lounge') == 1) {
                array_push($features, 'estate_lounge');
            }
            if ($request->input('close_to_landmark') == 1) {
                array_push($features, 'close_to_landmark');
            }
            if ($request->input('smart_home') == 1) {
                array_push($features, 'smart_home');
            }
            if ($request->input('category') == 1) {
                array_push($features, 'dry_land');
            }
            if ($request->input('wet_land') == 1) {
                array_push($features, 'wet_land');
            }
            if ($request->input('government_approved') == 1) {
                array_push($features, 'goverment_approved');
            }
            if ($request->input('with_c_of_o') == 1) {
                array_push($features, 'with_c_of_o');
            }

            

            $property                   = new Property();
            $property->prop_id               = $id;
            $property->name             = $request->input('name');
            $property->address            = $request->input('address');
            $property->price            = $request->input('price');
            $property->city            = $request->input('city');
            $property->country            = $request->input('country');
            $property->beds            = $request->input('beds');
            $property->baths            = $request->input('baths');
            $property->year            = $request->input('year');
            $property->size            = $request->input('size');
            $property->status     = json_encode($status);
            $property->type   = json_encode($type);
            $property->features   = json_encode($features);
            $property->images   = json_encode($images);
            $property->save();
    
            return redirect()->route('backend.properties.add')->with('success', 'Property added successfully');
        }
    }

    public function delete($id){
        $property = Property::find($id);
        $property->delete();
        return redirect()->route('backend.properties.list')->with('success', 'Property Deleted successfully');
    }
    public function list(){
        $properties = Property::all();
        return view('backend.properties.list', compact('properties'));
    }

    public function view(Request $request, $id){
        $property = Property::find($id);
        return view('backend.properties.view',compact('property'));
    }

    public function update(Request $request, $id) {
        if($request->isMethod('get')){
            $property = Property::find($id);
            return view('backend.properties.update')->with($property);
        }else{
            $validator = Validator::make($request->all(), [
                'name'             => 'required',
                'address'             => 'required',
                'price'           => 'required',
                'city'           => 'required',
                'country'           => 'required',
                'beds'           => 'required',
                'baths' => 'required',
                'year'           => 'required',
                'size'           => 'required',
            ]);
    
            if ($validator->fails()) {
                return redirect()->route('backend.properties.add')
                        ->withErrors($validator)
                        ->withInput();
            }
            $status = array();
            if ($request->input('ready_to_move') == 1) {
                array_push($status, 'ready_to_move_in');
            }
            if ($request->input('sold_out') == 1) {
                array_push($status, 'sold_out');
            }
            if ($request->input('open_house') == 1) {
                array_push($status, 'open_house');
            }
            if ($request->input('reduced_price') == 1) {
                array_push($status, 'reduced_price');
            }
            if ($request->input('resale') == 1) {
                array_push($status, 'resale');
            }
            if ($request->input('off_plan') == 1) {
                array_push($status, 'off-plan_project');
            }
            if ($request->input('new_listing') == 1) {
                array_push($status, 'new_listing');
            }
            if ($request->input('for_sale') == 1) {
                array_push($status, 'for_sale');
            }

            $type = array();
            if ($request->input('residential') == 1) {
                array_push($type, 'residential');
            }
            if ($request->input('commercial') == 1) {
                array_push($type, 'commercial');
            }
            if ($request->input('fully_detached_duplex') == 1) {
                array_push($type, 'fully_detached_duplex');
            }
            if ($request->input('semi_detatched_duplex') == 1) {
                array_push($type, 'semi_detatched_duplex');
            }
            if ($request->input('bungalow') == 1) {
                array_push($type, 'bungalow');
            }
            if ($request->input('penthouse') == 1) {
                array_push($type, 'penthouse');
            }
            if ($request->input('terrace') == 1) {
                array_push($type, 'terrace');
            }
            if ($request->input('apartment') == 1) {
                array_push($type, 'apartment');
            }
            if ($request->input('massiontte') == 1) {
                array_push($type, 'maisonette');
            }
            if ($request->input('residential_land') == 1) {
                array_push($type, 'residential_land');
            }
            if ($request->input('commercial_land') == 1) {
                array_push($type, 'commercial_land');
            }
            if ($request->input('office') == 1) {
                array_push($type, 'office');
            }

            $features = array();
            if ($request->input('fitted_kitchen') == 1) {
                array_push($features, 'fitted_kitchen_with_accessories');
            }
            if ($request->input('24_hour_security') == 1) {
                array_push($features, '24_hour_security');
            }
            if ($request->input('modern_pop_ceiling') == 1) {
                array_push($features, 'modern_day_pop_ceiling');
            }
            if ($request->input('detailed_finishing') == 1) {
                array_push($features, 'detailed_finishing');
            }
            if ($request->input('wardrobes') == 1) {
                array_push($features, 'wardrobes');
            }
            if ($request->input('jacuzzi') == 1) {
                array_push($features, 'jacuzzi');
            }
            if ($request->input('cctv') == 1) {
                array_push($features, 'cctv');
            }
            if ($request->input('automated_lights') == 1) {
                array_push($features, 'automated_light');
            }
            if ($request->input('water_heater') == 1) {
                array_push($features, 'water_heater');
            }
            if ($request->input('clean_water') == 1) {
                array_push($features, 'clean_water');
            }
            if ($request->input('heat_extractor') == 1) {
                array_push($features, 'heat_extractor');
            }
            if ($request->input('ample_parking_space') == 1) {
                array_push($features, 'ample_parking_space');
            }
            if ($request->input('gym') == 1) {
                array_push($features, 'gym');
            }
            if ($request->input('cinema') == 1) {
                array_push($features, 'cinema');
            }
            if ($request->input('swimming_pool') == 1) {
                array_push($features, 'swimming_pool');
            }
            if ($request->input('boys_quaters') == 1) {
                array_push($features, 'comes_with_boys_quarters');
            }
            if ($request->input('elevator') == 1) {
                array_push($features, 'elevator');
            }
            if ($request->input('installed_soundsystem') == 1) {
                array_push($features, 'installed_bluetooth_speakers');
            }
            if ($request->input('beach_front') == 1) {
                array_push($features, 'beach_front');
            }
            if ($request->input('gate_house') == 1) {
                array_push($features, 'gate_house');
            }
            if ($request->input('good_drainage') == 1) {
                array_push($features, 'good_drainage');
            }
            if ($request->input('lagoon_front_view') == 1) {
                array_push($features, 'lagoon_front_view');
            }
            if ($request->input('fully_furnished') == 1) {
                array_push($features, 'fully_furnished');
            }
            if ($request->input('air_conditioning') == 1) {
                array_push($features, 'air_conditioning');
            }
            if ($request->input('shildren_playgroud') == 1) {
                array_push($features, 'chilrens_playground');
            }
            if ($request->input('barbeque') == 1) {
                array_push($features, 'barbeque');
            }
            if ($request->input('spacious_compound') == 1) {
                array_push($features, 'spacious_compound');
            }
            if ($request->input('estate_lounge') == 1) {
                array_push($features, 'estate_lounge');
            }
            if ($request->input('close_to_landmark') == 1) {
                array_push($features, 'close_to_landmark');
            }
            if ($request->input('smart_home') == 1) {
                array_push($features, 'smart_home');
            }
            if ($request->input('category') == 1) {
                array_push($features, 'dry_land');
            }
            if ($request->input('wet_land') == 1) {
                array_push($features, 'wet_land');
            }
            if ($request->input('government_approved') == 1) {
                array_push($features, 'goverment_approved');
            }
            if ($request->input('with_c_of_o') == 1) {
                array_push($features, 'with_c_of_o');
            }

            

            $property                   = Property::find($id);
            $property->name             = $request->input('name');
            $property->address            = $request->input('address');
            $property->price            = $request->input('price');
            $property->city            = $request->input('city');
            $property->country            = $request->input('country');
            $property->beds            = $request->input('beds');
            $property->baths            = $request->input('baths');
            $property->year            = $request->input('year');
            $property->size            = $request->input('size');
            $property->status     = json_encode($status);
            $property->type   = json_encode($type);
            $property->features   = json_encode($features);
            $property->save();
    
            return redirect()->route('backend.properties.view', $id)->with('success', 'Property added successfully');
        }
    }
}