<?php 
session_start();
if(isset($_SESSION["user"])&& $_SESSION["user"]->id_role ==1) {
    include "controllers/c_home.php";
    $home = new c_home();
    $home->home();
}else {
    header("location:login-admin.php");
}