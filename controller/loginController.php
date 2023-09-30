<?php
session_start();
include('../model/conection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['userEmail'];
    $password = $_POST['userPasword'];

    $sqlselect = "SELECT userEmail, userPasword FROM users WHERE userEmail = '$email'";
    $result = $conection->query($sqlselect);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $passwordDB = $row['userPasword'];

        if ($password == $passwordDB) {
            $_SESSION['login'] = TRUE;
            header("Location: ../view/welcome.html");
        } else {
            header("Location: ../view/wrongData.html");
        }
    } else {
        header("Location: ../view/wrongData.html");
    }

    $conection->close();
}