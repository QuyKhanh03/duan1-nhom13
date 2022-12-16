<?php 
include "controllers/c_cart.php";
if (isset($_POST['payWithATM']) ||isset($_POST['captureWallet']) ){
    $momo = new c_cart();
    $momo->momo();
}elseif(isset($_POST['create-order'])){
    $cart = new c_cart();
    $cart->create_order();
}