<?php
include "include/connect.php";
if (isset($_POST["submit"])) {

    $myusername = $_POST["username"];
    $mypassword = $_POST["password"];

    //to protect login from sql injection
    $myusername = stripslashes($myusername);
    $mypassword = stripslashes($mypassword);
    $myusername = mysqli_real_escape_string($con, $myusername);
    $mypassword = mysqli_real_escape_string($con, $mypassword);
    //using sql statement to check database
    $sql = "SELECT * FROM reg_user WHERE username='$myusername' AND password='$mypassword'";

    $result = mysqli_query($con, $sql);
    //checking the table row;
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        //identify user using session
        session_start();
        $_SESSION["username"] = $myusername;

        header('location:./admin/app.php');
    } else {
        header('location:index.php');
    }
}
