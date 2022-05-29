<?php

function userRegistration($data) {
    $db = dbConnect();
    $stmt = $db->prepare("INSERT INTO users (email, login, fio, password) VALUES (?,?,?,?)");
    $stmt->bind_param( "ssss", $data['email'], $data['login'], $data['fio'], $data['password']);
    $stmt->execute();
    return $stmt;
}

function userAuthorization($data) {
    $db = dbConnect();
    if(isset($data['login']) && !empty($data['login']) && isset($data['password']) && !empty($data['password'])) {
        $stmt = $db->prepare("SELECT * FROM users WHERE login=?");
        $stmt->bind_param("s", $data['login']);
        $stmt->execute();
        $result=$stmt->get_result();
        $userData = $result->fetch_assoc();
        if ($data['password'] !== $userData['password']) {
            return  new Core\Error("Incorrect password");
        } else {
            $_SESSION['userName'] = $data['login'];
        }
    } else {
        return new Core\Error("Enter login or password");
    }
}

function getUserData() {
    $db = dbConnect();
    $stmt = $db->prepare("SELECT * FROM users WHERE login=?");
    $stmt->bind_param("s", $_SESSION['userName']);
    $stmt->execute();
    $result=$stmt->get_result();
    return $result->fetch_assoc(); 
}

function chengeUserInfo($data) {
    $db = dbConnect();
    $stmt = $db->prepare("SELECT * FROM users WHERE login=?");
        $stmt->bind_param("s", $_SESSION['userName']);
        $stmt->execute();
        $result=$stmt->get_result();
        $userData = $result->fetch_assoc();

    if ($data['password'] == $userData['password']) {
        if(isset($data['fio']) && !empty($data['fio']) && empty($data['newPassword']) && empty($data['confirmPassword'])) {
            $stmt = $db->prepare("UPDATE users SET fio=? WHERE login=?");
            $stmt->bind_param("ss", $data['fio'], $_SESSION['userName']);
            $result = $stmt->execute(); 
            if ($result == false) {
                return  new Core\Error("Incorrect update");
            }
        }
        if (isset($data['fio']) && !empty($data['fio']) && !empty($data['newPassword']) && !empty($data['confirmPassword'])) {
            if($data['newPassword'] == $data['confirmPassword']) {
                $stmt = $db->prepare("UPDATE users SET fio=?, password=?  WHERE login=?");
                $stmt->bind_param("sss", $data['fio'], $data['newPassword'], $_SESSION['userName']);
                $result = $stmt->execute(); 
                if ($result == false) {
                    return  new Core\Error("Incorrect update");
                }
            } else {
                return  new Core\Error("Incorrect confirm password");
            }
        }
        
    } else {
        return  new Core\Error("Incorrect password");
    }
}