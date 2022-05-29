<?php

function getTitle() {
    include $_SERVER['DOCUMENT_ROOT'] . '/database/pageInfo.php';

    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return $pageInfo[$path]['title'];
}