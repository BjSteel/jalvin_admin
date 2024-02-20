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
                return redirect()->route('properties.add')
                        ->withErrors($validator)
                        ->withInput();
            }
            $id = generateUniqueId();


            $images = array();
            foreach($request->file('images') as $file){
                $name=date('mdYHis').$file->getClientOriginalName();
                Storage::disk('ftp')->put('properties/images/'.$id.'/'.$name, fopen($file, 'r+'));
                array_push($images, $name);
            }

            $status = array();
            if ($request->input('ready_to_move') == 1) {
                array_push($status, 'Ready to move in');
            }
            if ($request->input('sold_out') == 1) {
                array_push($status, 'Sold out');
            }
            if ($request->input('open_house') == 1) {
                array_push($status, 'Open house');
            }
            if ($request->input('reduced_price') == 1) {
                array_push($status, 'Reduced price');
            }
            if ($request->input('resale') == 1) {
                array_push($status, 'Resale');
            }
            if ($request->input('off_plan') == 1) {
                array_push($status, 'Off-plan project');
            }
            if ($request->input('new_listing') == 1) {
                array_push($status, 'New listing');
            }
            if ($request->input('for_sale') == 1) {
                array_push($status, 'For sale');
            }
            

            $type = array();
            if ($request->input('residential') == 1) {
                array_push($type, 'Residential');
            }
            if ($request->input('commercial') == 1) {
                array_push($type, 'Commercial');
            }
            if ($request->input('fully_detached_duplex') == 1) {
                array_push($type, 'Fully Detached Duplex');
            }
            if ($request->input('semi_detatched_duplex') == 1) {
                array_push($type, 'Semi Detached Duplex');
            }
            if ($request->input('bungalow') == 1) {
                array_push($type, 'Bungalow');
            }
            if ($request->input('penthouse') == 1) {
                array_push($type, 'Penthouse');
            }
            if ($request->input('terrace') == 1) {
                array_push($type, 'Terrace');
            }
            if ($request->input('apartment') == 1) {
                array_push($type, 'Apartment');
            }
            if ($request->input('massiontte') == 1) {
                array_push($type, 'Maisontte');
            }
            if ($request->input('residential land') == 1) {
                array_push($type, 'Residential Land');
            }
            if ($request->input('commercial_land') == 1) {
                array_push($type, 'Commercial Land');
            }
            if ($request->input('office') == 1) {
                array_push($type, 'office');
            }
            

            $features = array();
            if ($request->input('fitted_kitchen') == 1) {
                array_push($features, 'Fitted Kitchen With Accessories');
            }
            if ($request->input('24_hour_security') == 1) {
                array_push($features, '24 Hour Security');
            }
            if ($request->input('modern_pop_ceiling') == 1) {
                array_push($features, 'Modern Day POP Ceiling');
            }
            if ($request->input('detailed_finishing') == 1) {
                array_push($features, 'Detailed Finishing');
            }
            if ($request->input('wardrobes') == 1) {
                array_push($features, 'Wardrobes');
            }
            if ($request->input('jacuzzi') == 1) {
                array_push($features, 'jacuzzi');
            }
            if ($request->input('cctv') == 1) {
                array_push($features, 'CCTV');
            }
            if ($request->input('automated_lights') == 1) {
                array_push($features, 'Automated Light');
            }
            if ($request->input('water_heater') == 1) {
                array_push($features, 'water heater');
            }
            if ($request->input('clean_water') == 1) {
                array_push($features, 'clean water');
            }
            if ($request->input('heat_extractor') == 1) {
                array_push($features, 'Heat Extractor');
            }
            if ($request->input('ample_parking_space') == 1) {
                array_push($features, 'Ample Parking Space');
            }
            if ($request->input('gym') == 1) {
                array_push($features, 'gym');
            }
            if ($request->input('cinema') == 1) {
                array_push($features, 'cinema');
            }
            if ($request->input('swimming_pool') == 1) {
                array_push($features, 'swimming pool');
            }
            if ($request->input('boys_quaters') == 1) {
                array_push($features, 'comes with boys quarters');
            }
            if ($request->input('elevator') == 1) {
                array_push($features, 'elevator');
            }
            if ($request->input('installed_soundsystem') == 1) {
                array_push($features, 'installed bluetooth speakers');
            }
            if ($request->input('beach_front') == 1) {
                array_push($features, 'beach front');
            }
            if ($request->input('gate_house') == 1) {
                array_push($features, 'Gate house');
            }
            if ($request->input('good_drainage') == 1) {
                array_push($features, 'Good drainage');
            }
            if ($request->input('lagoon_front_view') == 1) {
                array_push($features, 'lagoon front view');
            }
            if ($request->input('fully_furnished') == 1) {
                array_push($features, 'fully furnished');
            }
            if ($request->input('air_conditioning') == 1) {
                array_push($features, 'air conditioning');
            }
            if ($request->input('shildren_playgroud') == 1) {
                array_push($features, 'chilren\'s playground');
            }
            if ($request->input('barbeque') == 1) {
                array_push($features, 'barbeque');
            }
            if ($request->input('spacious_compound') == 1) {
                array_push($features, 'spacious compound');
            }
            if ($request->input('estate_lounge') == 1) {
                array_push($features, 'estate lounge');
            }
            if ($request->input('close_to_landmark') == 1) {
                array_push($features, 'close to landmark');
            }
            if ($request->input('smart_home') == 1) {
                array_push($features, 'smart home');
            }
            if ($request->input('category') == 1) {
                array_push($features, 'dry land');
            }
            if ($request->input('wet_land') == 1) {
                array_push($features, 'wet land');
            }
            if ($request->input('government_approved') == 1) {
                array_push($features, 'goverment approved');
            }
            if ($request->input('with_c_of_o') == 1) {
                array_push($features, 'with c of o');
            }
            if ($request->input('gate_house') == 1) {
                array_push($features, 'gate house');
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
    
            return redirect()->route('properties.add')->with('success', 'Property added successfully');
        }
    }
}
