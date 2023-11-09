<?php
require_once "User.php";
$user=new user("users");
$fname=$_POST["fName"];
$lname=$_POST["lName"];
$username=$_POST["userName"];
$password=$_POST["password"];
$user->insert(["fname"=>$fname,
"lname"=>$lname,
    "username"=>$username,
    "password"=>$password]);
header("Location: dashboard.php");