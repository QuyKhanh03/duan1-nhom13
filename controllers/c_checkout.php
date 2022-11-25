<?php
include "models/m_checkout.php";
class c_checkout
{

    public function checkout()
    {
        if (isset($_POST["submit"])) {
            $ten = $_POST["ten_khach_hang"];
            $ngay = date_create($_POST["ngay_sinh"]);
            $ngay_sinh = date_format($ngay, "Y-m-d");
            $dia_chi = $_POST["dia_chi"];
            $sdt = $_POST["dien_thoai"];
            $email = $_POST["email"];
            $ghi_chu = $_POST["ghi_chu"];
            $m_checkout = new m_checkout();
            $id_cus = $m_checkout->them_khach_hang($ten, $ngay_sinh, $dia_chi, $sdt, $email, $ghi_chu);
            // echo "<pre>";
            // echo print_r($result);
            // var_dump($result);
            // die();
            if ($id_cus>0) {
                // $id_user = null;
                $date_order = date('Y-m-d');
                $totals = 0;
                $payments = $_POST["httt"];
                $order = $m_checkout->insertOrder($date_order,$id_cus, $totals, $payments);
                // echo "<pre";
                // echo print_r($order);
                // die();
                if ($order) {
                    include_once "controllers/c_cart.php";
                    $c_cart = new c_cart();
                    $gio_hang = $c_cart->cart();
                    echo "<pre>";
                    echo print_r($gio_hang);
                    // die();
                    foreach($gio_hang as $key => $item) {
                        if(substr($key,0,1)=='t') {
                            $m_checkout->orderDetail($order,substr($key,1,strlen($key)-1),$value,0);
                        } else {
                            $m_checkout->orderDetail($order,$key,$value,0);
                        }
                    }
                }
            }
        }

        $view = "views/cart/v_checkout.php";
        include "templates/front-end/layout.php";
    }
}
