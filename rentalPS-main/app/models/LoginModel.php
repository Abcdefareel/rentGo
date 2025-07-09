<?php
session_start();
$dataJson = __DIR__ . "/../database/user.json";
$data = file_exists($dataJson) ? json_decode(file_get_contents($dataJson), true) : [];

if (isset($_POST['loginUser'])) {
    $identifier = $_POST['identifier'];
    $password = $_POST['password'];
    $userFound = false;
    $alert = "";

    foreach ($data as $user) {
        $verify = password_verify($password, $user['password']);
        if (($user['username'] === $identifier || $user['email'] === $identifier) && $verify) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['photo'] = $user['photo'];
            $_SESSION['found'] = true;
            $userFound = true;
            break;
        }
    }

    if ($userFound) {
         header("Location: http://localhost:8080/dashboard");
        exit;
    } else {
        $alert = "Invalid username/email or password.";
        $_SESSION['alert'] = $alert;
        header("Location: https://www.google.com");
        exit;
    }
}