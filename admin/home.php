<?php 
session_start();
if(isset($_SESSION["admin"])) {
    include "controllers/c_home.php";
    $home = new c_home();
    $home->home();
}else {
    header("location:login-admin.php");
}