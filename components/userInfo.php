<?php

function userInfo() {
    $userData = getUserData(); 
    include $_SERVER['DOCUMENT_ROOT'] . '/templates/userInfo.php';
}