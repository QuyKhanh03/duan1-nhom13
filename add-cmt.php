<?php 
session_start();
if(isset($_SESSION["user"])) {
    include "controllers/c_product.php";
$c_prd = new c_product();
$c_prd->add_cmt();
}else {
    header("location:login.php");
}