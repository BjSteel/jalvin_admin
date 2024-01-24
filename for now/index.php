<?php
include('routes/web.php');
$request = $_SERVER['REQUEST_URI'];
$routes = new Routes();
switch ($request) {
    case '/admin/':
        $routes->index();
        break;
    case '' :
        $routes->index();
        break;
    case '/' :
        $routes->index();
        break;
    case '/admin/home' :
        $routes->index();
        break;
    case '/admin/index' :
        $routes->index();
        break;
    case '/admin/dashboard' :
        $routes->index();
        break;
    case '/admin/login' :
        $routes->login();
        break;
    case '/admin/about' :
        $routes->about();
        break;
    case '/admin/contact' :
        $routes->contact();
        break;
    case '/admin/faq' :
        $routes->faq();
        break;
    case '/admin/services/mobile-app-development' :
        $routes->mobile_app_development();
        break;
    case '/admin/services/website-development' :
        $routes->website_development();
        break;
    case '/admin/test' :
        $routes->test();
        break;
    default:
        http_response_code(404);
        $routes->error404();
        break;
}