<?php 
include "controllers/c_checkout.php";
$c_checkout = new c_checkout();
if(isset($_GET["key"])) {
    $key = $_GET["key"];
    if($key == 'dat-hang') {
        $c_checkout->checkout();
    }
}