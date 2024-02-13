<?php

namespace App\Http\Controllers;
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
                'name'             => 'required|max:255',
                'subtext'             => 'required|max:255',
                'price'           => 'required', 'integer',
                'discount'           => 'integer',
                'images' => 'required',
                'images.*' => 'mimes:jpeg,png,jpg'
            ]);
    
            if ($validator->fails()) {
                if ($request->ajax()) {
                    return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
                } else {
                    return redirect()->route('menu.add')
                        ->withErrors($validator)
                        ->withInput();
                }
            }
            $id = generateUniqueId();


            $images = array();
            foreach($request->file('images') as $file){
                $name=date('mdYHis').$file->getClientOriginalName();
                Storage::disk('ftp')->put('menus/images/'.$id.'/'.$name, fopen($file, 'r+'));
                $images[]=$name;
            }

            $spice = array();
            
            if($request->input('pepper') == 1){
                array_push($spice,'pepper');
            }
            if($request->input('plantain') == 1){
                array_push($spice,'plantain');
            }
            if($request->input('beef') == 1){
                array_push($spice,'beef');
            }
            if($request->input('cow_meat') == 1){
                array_push($spice,'cow_meat');
            }
            if($request->input('vegetable') == 1){
                array_push($spice,'vegetable');
            }
            if($request->input('tomato') == 1){
                array_push($spice,'tomato');
            }
            if($request->input('fish') == 1){
                array_push($spice,'fish');
            }
            if($request->input('rice') == 1){
                array_push($spice,'rice');
            }
            if($request->input('drink') == 1){
                array_push($spice,'drink');
            }
            if($request->input('burger') == 1){
                array_push($spice,'burger');
            }
            if($request->input('fries') == 1){
                array_push($spice,'fries');
            }
            if($request->input('chicken') == 1){
                array_push($spice,'chicken');
            }
            if($request->input('shrimps') == 1){
                array_push($spice,'shrimps');
            }


            $property_features = array();
            
                if($request->input('fitted_kitchen') == 1){array_push($property_features, 'Fitted Kitchen With Accessories');}
                if($request->input('24_hour_security') == 1){array_push($property_features, '24 Hour Security');}
            

            
                if($request->input('modern_pop_ceiling') == 1){array_push($property_features, 'Modern Day POP Ceiling');}
            

            
                if($request->input('detailed_finishing') == 1){array_push($property_features, 'Detailed Finishing');}
            

            
                if($request->input('wardrobes') == 1){array_push($property_features, 'Wardrobes');}
            

            
                if($request->input('jacuzzi') == 1){array_push($property_features, 'jacuzzi');}
            

            
                if($request->input('cctv') == 1){array_push($property_features, 'CCTV');}
            

            
                if($request->input('automated_lights') == 1){array_push($property_features, 'Automated Light');}
            

            
                if($request->input('water_heater') == 1){array_push($property_features, 'water heater');}
            

            
                if($request->input('clean_water') == 1){array_push($property_features, 'clean water');}
            

            
                if($request->input('heat_extractor') == 1){array_push($property_features, 'Heat Extractor');}
            

            
                if($request->input('ample_parking_space') == 1){array_push($property_features, 'Ample Parking Space');}
            

            
                if($request->input('gym') == 1){array_push($property_features, 'gym');}
            

            
                if($request->input('cinema') == 1){array_push($property_features, 'cinema');}
            

            
                if($request->input('swimming_pool') == 1){array_push($property_features, 'swimming pool');}
            

            
                if($request->input('boys_quaters') == 1){array_push($property_features, 'comes with boys quarters');}
            

            
                if($request->input('elevator') == 1){array_push($property_features, 'elevator');}
            

            
                if($request->input('installed_soundsystem') == 1){array_push($property_features, 'installed bluetooth speakers');}
            

            
                if($request->input('beach_front') == 1){array_push($property_features, 'beach front');}
            

            
                if($request->input('gate_house') == 1){array_push($property_features, 'Gate house');}
            
            
                if($request->input('good_drainage') == 1){array_push($property_features, 'Good drainage');}
            

            
                if($request->input('lagoon_front_view') == 1){array_push($property_features, 'lagoon front view');}
            

            
                if($request->input('fully_furnished') == 1){array_push($property_features, 'fully furnished');}
            

            
                if($request->input('air_conditioning') == 1){array_push($property_features, 'air conditioning');}
            

            
                if($request->input('shildren_playgroud') == 1){array_push($property_features, 'chilren\'s playground');}
            

            
                if($request->input('barbeque') == 1){array_push($property_features, 'barbeque');}
            

            
                if($request->input('spacious_compound') == 1){array_push($property_features, 'spacious compound');}
            

            
                if($request->input('estate_lounge') == 1){array_push($property_features, 'estate lounge');}
            

            
                if($request->input('close_to_landmark') == 1){array_push($property_features, 'close to landmark');}
            

            
                if($request->input('smart_home') == 1){array_push($property_features, 'smart home');}
            

            
                if($request->input('category') == 1){array_push($property_features, 'dry land');}
            

            
                if($request->input('wet_land') == 1){array_push($property_features, 'wet land');}
            

            
                if($request->input('government_approved') == 1){array_push($property_features, 'goverment approved');}
            

            
                if($request->input('with_c_of_o') == 1){array_push($property_features, 'with c of o');}
            

            
                if($request->input('gate_house') == 1){array_push($property_features, 'gate house');}
            
	
            
            if($request->input('suya') == 1){
                array_push($categories,'suya');
            }
            if($request->input('asun') == 1){
                array_push($categories,'asun');
            }
            if($request->input('fish') == 1){
                array_push($categories,'fish');
            }
            if($request->input('shawarma') == 1){
                array_push($categories,'shawarma');
            }
            if($request->input('soup') == 1){
                array_push($categories,'soup');
            }
            if($request->input('sides') == 1){
                array_push($categories,'sides');
            }
            if($request->input('rice') == 1){
                array_push($categories,'rice');
            }
            if($request->input('plantain') == 1){
                array_push($categories,'plantain');
            }
    
            $menu                   = new Property();
            $menu->menu_id               = $id;
            $menu->name             = $request->input('name');
            $menu->description            = $request->input('subtext');
            $menu->category     = json_encode($categories);
            $menu->display_img   = $images[0];
            $menu->img   = json_encode($images);
            $menu->spice   = json_encode($spice);
            $menu->price     = $request->input('price');
            $menu->discount            = $request->input('discount');
            $menu->save();
    
            return redirect()->route('menu.list')->with('success', 'Menu added successfully');
        }
    }



}
