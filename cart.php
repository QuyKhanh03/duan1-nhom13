<?php 
include "controllers/c_cart.php";
if(isset($_SESSION["user"])) {
    $cart = new c_cart();
    $cart->xem_gio_hang();
}else {
    echo "<script>alert('Bạn cần đăng nhập')</script>";
    
}
