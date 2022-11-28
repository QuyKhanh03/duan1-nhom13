<?php 
include "controllers/c_cart.php";
if(isset($_SESSION["user"])) {
    $cart = new c_cart();
    $cart->xem_gio_hang();
    // $cart->create_order();
}else {
    header("location:login.php");
}
