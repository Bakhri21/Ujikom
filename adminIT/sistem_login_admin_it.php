<?php

session_start();

$validusername = "AdminIT5";
$validpassword = "thewindtalker";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $validusername) {
        if ($password == $validpassword) {
            $_SESSION["login_admin_it"] = true;
            header("location:halaman_admin_it.php");
        } else {
            header("location:login_admin_it.php?passwordvalid=gagal");
        }
    } else {
        header("location:login_admin_it.php?usernamevalid=gagal");
    }
}
