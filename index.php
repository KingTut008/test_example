<?php 
include $_SERVER['DOCUMENT_ROOT'] . '/core/core.php';

include $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php'; 

route($isAuth ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : "/", $isAuth, $_SESSION['error']);

include $_SERVER['DOCUMENT_ROOT'] . '/templates/footer.php'; ?>
