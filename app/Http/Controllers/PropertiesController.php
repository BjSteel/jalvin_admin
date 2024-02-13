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


            $categories = array();
            
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
    
            $menu                   = new Menu();
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
