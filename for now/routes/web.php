<?php
session_start();
include('view.php');
include('check_login.php');
class Routes {
    public function index() {
        return view(check_login('properties.dashboard','auth.login'));
    }

    public function about() {
        return view(check_login('theme.about','auth.login'));
    }

    public function faq() {
        return view(check_login('theme.faq','auth.login'));
    }
    
    public function login() {
        return view(check_login('auth.login','auth.login'));
    }

    public function test() {
        return view('test.test');
    }
    public function contact() {
        return view(check_login('theme.contact','auth.login'));
    }

    public function mobile_app_development() {
        return view(check_login('theme.mobile-app-development','auth.login'));
    }

    public function website_development() {
        return view(check_login('theme.website-development','auth.login'));
    }

    public function error404() {
        return view('404.404');
    }

    // public function index() {
    //     return view(check_login('backend.','auth.login'));
    // }
}