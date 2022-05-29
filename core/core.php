<?php
session_start();
ini_set('error_reporting', E_ALL);

require_once $_SERVER['DOCUMENT_ROOT'] . '/database/db.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/error.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/users.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/router.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/components/login.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/components/registration.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/components/userInfo.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/components/viewTableData.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/pageInfo.php';

$_SESSION['error'] = false;

if(isset($_POST['singin'])) {
    try {
        $result = userAuthorization($_POST);
        if (isset($result->error)) {
            throw new Exception($result->error);
        }
        $_SESSION['login'] = true;
    } catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
    }
}

if(isset($_POST['logout'])) {
    unset($_SESSION['userName']);
    unset($_SESSION['login']);
}

if(isset($_POST['registration'])) {
    try {
        $result = userRegistration($_POST);
        if (isset($result->error)) {
            throw new Exception($result->error);
        }
        $_SESSION['login'] = true;
    } catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
    }
}

if(isset($_POST['chengeUserInfo'])) {
    try {
        $result = chengeUserInfo($_POST);
        if (isset($result->error)) {
            throw new Exception($result->error);
        }
        $_SESSION['login'] = true;
    } catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
    }
}

$isAuth = isset($_SESSION['login']) ?? false;