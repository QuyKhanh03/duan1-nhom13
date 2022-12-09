<?php 
require_once "models/m_order.php";
class c_order{
    
    public function index() {
        $m_order = new m_order();
        $row = $m_order->read_order();
        $view = "views/order/v_order.php";
        include "templates/layout.php";
    }
    public function edit_order() {
        if(isset($_GET["id_order"])) {
            $id_order = $_GET["id_order"];
            $m_order = new m_order();
            if(isset($_POST["btn"])) {
                $status = $_POST["chose"];
               $resulut = $m_order->update_status($status,$id_order);
                if($resulut) {
                    header(("location:order.php"));
                }else {
                    echo "<script>alert('không thành công')</script>";
                }
            }
        }
        
        $view = "views/order/v_editOrder.php";
        include "templates/layout.php";
    }
    public function order_details() {
        if(isset($_GET["id_order"])) {
            $id_order = $_GET["id_order"];
            $m_order = new m_order();
            $order_details = $m_order->read_order_detail($id_order);
            $all = $m_order->read_all_order_detail($id_order);
            $info = $m_order->read_info_by_id_order($id_order);
        }
        $view = "views/order/v_order_detail.php";
        include "templates/layout.php";
    }
    
}