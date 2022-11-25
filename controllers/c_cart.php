<?php
error_reporting(0);
session_start();
if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = [];
}
class c_cart
{
    public function xem_gio_hang()
    {
        if (isset($_POST["add-cart"])) {
            $id = $_POST["product_id"];
            $name = $_POST["ten-sp"];
            $image = $_POST["hinh"];
            $price = $_POST["gia"];
            $quantily = $_POST["so-luong"];
            $total = $price * $quantily;
            $prd_add = [$id, $name, $image, $price, $quantily, $total];
            array_push($_SESSION["cart"], $prd_add);
            
            // echo "<pre>";
            // echo print_r($_SESSION["cart"]);
            // die();
        }
        $view = "views/cart/v_cart.php";
        include "templates/front-end/layout.php";
    }
    function lay_gio_hang()
    {
        if (isset($_POST["add-cart"])) {
            $id = $_POST["product_id"];
            $name = $_POST["ten-sp"];
            $image = $_POST["hinh"];
            $price = $_POST["gia"];
            $quantily = $_POST["so-luong"];
            $prd_add = [$id, $name, $image, $price, $quantily];
            array_push($_SESSION["cart"], $prd_add);
            // echo "<pre>";
            // echo print_r($_SESSION["cart"]);
            // die();

            header("location:index.php");
        }
    }
    public function cart() {
        if(isset($_SESSION["cart"])) {
            return $_SESSION["cart"];
        }else {
            return false;
        }
    }
    public function xoa1_hang_ve_cart()
    {
        if (isset($_GET["id_cart"])) {
            // echo $_GET["id_cart"];
            $id_cart = $_GET["id_cart"];
            // die();
            if(!empty($_SESSION["cart"])) {
                foreach($_SESSION["cart"] as $key => $value ) {
                    if($value[0] == $id_cart) {
                        unset($_SESSION["cart"][$key]);
                    }
                }
            }
            // array_slice($_SESSION["cart"], $_GET["id_cart"], 1);
        } else {
            $_SESSION["cart"] = [];
        }
        header("location:cart.php");
    }
    public function xoa_ve_index()
    {
        if (isset($_GET["id_cart"])) {
            // echo $_GET["id_cart"];
            $id_cart = $_GET["id_cart"];
            // die();
            if(!empty($_SESSION["cart"])) {
                foreach($_SESSION["cart"] as $key => $value ) {
                    if($value[0] == $id_cart) {
                        unset($_SESSION["cart"][$key]);
                    }
                }
            }
            
            // array_slice($_SESSION["cart"], $_GET["id_cart"], 1);
        } else {
            $_SESSION["cart"] = [];
        }
        header("location:index.php");
    }
    // 
    
    
}
