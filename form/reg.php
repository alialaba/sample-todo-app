<?php
include "../include/connect.php";

if (isset($_POST["submit"])) {
    $myfullname = $_POST["fullname"];
    $myusername = $_POST["username"];
    $password = $_POST["password"];

    $query = "INSERT INTO reg_user(fullname,username,password)
     values('$myfullname', '$myusername', '$password')";
    if (mysqli_query($con, $query)) {
        header("location:../index.php");
    } else {
        header("location:sign_up.php");
    }
}
