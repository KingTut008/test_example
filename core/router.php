<?php

function route($path, $isAuth, $error) {
    $path = ($path == "/" ) && $isAuth ? 'main' : $path; 
    switch($path) {
        case '/about' : include_once $_SERVER['DOCUMENT_ROOT'] . '/pages/about.php'; break;
        case '/main': include_once $_SERVER['DOCUMENT_ROOT'] . '/pages/main.php'; break;
        case '/': 
        default: 
            if($isAuth) {
                include_once $_SERVER['DOCUMENT_ROOT'] . '/pages/main.php'; break;
            } else {
                include_once $_SERVER['DOCUMENT_ROOT'] . '/pages/login.php'; break;
            }
    }
}