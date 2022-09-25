<?php

function emptyInputRegister($firstName, $lastName, $gender, $email, $password, $passwordRepeat, $phoneNumber)
{
    $result;
    if (empty($firstName) || empty($lastName) || empty($gender) || empty($email) || empty($password) || empty($passwordRepeat) || empty($phoneNumber)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}


function invalidEmail($email)
{
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $passwordRepeat)
{
    $result;
    if ($password !== $passwordRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function emailTaken($conn, $email)
{
    $sql = "SELECT * FROM registration WHERE email  = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: index.php?page=register?error=stmtFailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function registerUser($conn, $firstName, $lastName, $gender, $email, $password, $phoneNumber)
{

    $sql = "INSERT INTO registration (firstName,lastName, gender, email, password, number) VALUES (?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: index.php?page=register?error=stmtFailed");
        exit();
    }

    $hashedPasswprd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $firstName, $lastName, $gender, $email, $hashedPasswprd, $phoneNumber);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: index.php?page=register?error=none");
    exit();
}
