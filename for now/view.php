<?php

function view($path){
    include('routes/assets_path.php');
    include('routes/nav_links.php');
    $site_header =  __DIR__ . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR .'layouts'.DIRECTORY_SEPARATOR.'header.blade.php';
    $site_footer =  __DIR__ . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR .'layouts'.DIRECTORY_SEPARATOR.'footer.blade.php';
    $uri = $path;
    $delimiter = '.';
    $dir = explode($delimiter, $uri);
    $complete_path = [];
    foreach ($dir as $dir){
        $complete_path[]= $dir;
    }
    $path = '';
    $complete_path2 = $sliced = array_slice($complete_path, 0, -1);
    foreach ($complete_path2 as $uri){
        $path .= $uri.'/';
    }
    $path = __DIR__ . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . $path .end($complete_path). '.php';
    require $path;
    
}