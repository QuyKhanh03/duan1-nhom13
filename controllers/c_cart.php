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
        if (isset($_SESSION["user"])) {
            if (isset($_POST["add-cart"])) {
                $id = $_POST["product_id"];
                $name = $_POST["ten-sp"];
                $image = $_POST["hinh"];
                $price = $_POST["gia"];
                $quantily = $_POST["so-luong"];
                $total = $price * $quantily;
                $i = 0;
                $flag = 0;
               if(isset($_SESSION["cart"]) && (count($_SESSION["cart"])>0)) {
                foreach ($_SESSION["cart"] as $key) {
                    if($key[0]==$id) {
                        $quantily +=$key[4];
                        $flag =1;
                        $_SESSION["cart"][$i][4] = $quantily;
                        break;
                    }
                    $i++;
                }
               }
                if($flag == 0) {
                    $prd_add = [$id, $name, $image, $price, $quantily, $total];
                    array_push($_SESSION["cart"], $prd_add);
                }
            }
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
            $total = $price * $quantily;
            // $prd_add = [$id, $name, $image, $price, $quantily];
            // array_push($_SESSION["cart"], $prd_add);
            $i = 0;
            $flag = 0;
           if(isset($_SESSION["cart"]) && (count($_SESSION["cart"])>0)) {
            foreach ($_SESSION["cart"] as $key) {
                if($key[0]==$id) {
                    $quantily +=$key[4];
                    $flag =1;
                    $_SESSION["cart"][$i][4] = $quantily;
                    break;
                }
                $i++;
            }
           }
            if($flag == 0) {
                $prd_add = [$id, $name, $image, $price, $quantily, $total];
                array_push($_SESSION["cart"], $prd_add);
            }
            header("location:cart.php");
        }
    }



    public function xoa1_hang_ve_cart()
    {
        if (isset($_GET["id_cart"])) {
            $id_cart = $_GET["id_cart"];
            if (!empty($_SESSION["cart"])) {
                foreach ($_SESSION["cart"] as $key => $value) {
                    if ($value[0] == $id_cart) {
                        unset($_SESSION["cart"][$key]);
                    }
                }
            }
        } else {
            $_SESSION["cart"] = [];
        }
        header("location:cart.php");
    }
    public function xoa_ve_index()
    {
        if (isset($_GET["id_cart"])) {
            $id_cart = $_GET["id_cart"];
            // die();
            if (!empty($_SESSION["cart"])) {
                foreach ($_SESSION["cart"] as $key => $value) {
                    if ($value[0] == $id_cart) {
                        unset($_SESSION["cart"][$key]);
                    }
                }
            }
        } else {
            $_SESSION["cart"] = [];
        }
        header("location:index.php");
    }
    public function create_order()
    {
        include "models/m_checkout.php";
        $m_checkout = new m_checkout();
        if (isset($_SESSION["user"])) {
            if (isset($_POST["create-order"]) && !empty($_SESSION["cart"])) {
                $id = $_SESSION["user"]->id_user;
                $totals = $_POST["tongtien"];
                $address = $_POST["address"];
                $phone = $_POST["phone"];
                $m_checkout->insertOrder($id, $totals);
                $m_checkout->update_user($phone, $address, $id);
                $order = $m_checkout->getOrder();
                $id_order = $order[0]->id_order;
                if (isset($_SESSION["cart"])) {
                    foreach ($_SESSION["cart"] as $key) {
                        $total_item = ($key[3] * $key[4]);
                        $m_checkout->orderDetail($key[1], $key[4], $id_order, $total_item, $key[2]);
                        $m_checkout->update_quantity($key[0], $key[4]);
                    }
                    // echo "<pre>";
                    // echo print_r($m_checkout->orderDetail($key[1],$key[4],$id_order,$total_item,$key[2]));
                }

                header("location:cart.php");
                unset($_SESSION["cart"]);
            }
        } else {
            header("location:login.php");
        }
    }
    public function index()
    {
        if (isset($_SESSION["user"])) {
            include "models/m_user.php";
            $m_user = new m_user();
            // $user = $_SESSION["user"];
            $id_user = $_SESSION["user"]->id_user;
            $user = $m_user->getUserById($id_user);
            $order = $m_user->getOrderByIdUser($id_user);
        }
        $view = "views/bill/v_bill.php";
        include "templates/front-end/layout.php";
    }
    public function detail_bill()
    {
        if (isset($_GET["id_order"])) {
            $id_order = $_GET["id_order"];
            include "models/m_checkout.php";
            $m_checkout = new m_checkout();
            $order = $m_checkout->read_order_by_id($id_order);
        }
        $view = "views/bill/v_detail_bill.php";
        include "templates/front-end/layout.php";
    }
    public function delete_order()
    {
        if (isset($_GET["id_order"])) {
            include "models/m_checkout.php";
            $m_checkout = new m_checkout();
            $id_order = $_GET["id_order"];
            $result = $m_checkout->delete_order_by_id($id_order);
            if ($result) {
                header("location:bills.php");
            }
        }
    }
}
