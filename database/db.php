<?php

function dbConnect() {
    $host = "localhost";
    $login = "admin";
    $pass = "admin";
    $db = "test";

    static $connect;

    if (!empty($connect)) {
        return $connect;
    } else {
        try {
            $connect = new mysqli($host, $login, $pass, $db);
            if ($connect->connect_error) {
                throw new Exception($connect->connect_error);
            } else {
                return $connect;
            }
        } catch (Exception $e) {
            return var_dump($e->getMessage());
        }
    }
}