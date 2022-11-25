<?php 
   if(isset($_SESSION["user"])) {
    include "controllers/c_cart.php";
    $cart = new c_cart();
    $cart->lay_gio_hang();
   } else {
        echo "<script>alert('Bạn cần đăng nhập')</script>";
        header("location:login.php");
   }
    // $cart->update_cart();
?>