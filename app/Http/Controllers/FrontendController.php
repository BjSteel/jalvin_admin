<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index(){
        return view('frontend.home');
    }

    function about(){
        return view('frontend.about');
    }

    function search(){
        return view('frontend.search');
    }

    function inquiry(){
        return view('frontend.inquiry');
    }

    function contact(){
        return view('frontend.contact');
    }
}
