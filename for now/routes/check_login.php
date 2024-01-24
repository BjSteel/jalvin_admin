<?php
function check_login($path1, $path2){
    if (isset($_SESSION['user'])){
        return $path1;
    }else{
        return $path2;
    }
}