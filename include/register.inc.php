<?php

if (isset($_POST["registerButton"])) {
    $firstName      =  $_POST["firstName"];
    $lastName       =  $_POST["lastName"];
    $gender         =  $_POST["gender"];
    $email          =  $_POST["email"];
    $password       =  $_POST["password"];
    $passwordRepeat =  $_POST["passwordRepeat"];
    $phoneNumber    =  $_POST["phoneNumber"];

    require_once '../core/dbConnection.php';
    require_once '../core/functions.php';

    if (emptyInputRegister($firstName, $lastName, $gender, $email, $password, $passwordRepeat, $phoneNumber) !== false) {
        header("location: index.php?default");
        exit();
    }
  
    if (invalidEmail($email) !== false) {
        header("location: index.php?default");
        exit();
    }
    if (passwordMatch($password, $passwordRepeat) !== false) {
        header("location: index.php?default");
        exit();
    }
    if (emailTaken($conn, $email) !== false) {
        header("location: index.php?default");
        exit();
    }
    registerUser($conn, $firstName, $lastName, $gender, $email, $password, $passwordRepeat, $phoneNumber);
} else {
    header("location: index.php?page=register");
    exit();
}
