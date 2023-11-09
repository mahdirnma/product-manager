<?php
require_once "User.php";
$user=new user("users");
$username=$_POST["userName"];
$password=$_POST["password"];
$status=false;
foreach ($user->select() as $row){
    if ($row["userName"]==$username && $row["password"]==$password){
        $status=true;
    }
}
if ($status){
    header("Location: dashboard.php");
}else{
    header("Location: index.php");

}