<?php 
include "controllers/c_cart.php";
$cart = new c_cart();
$cart->create_order();
header("location:cart.php");