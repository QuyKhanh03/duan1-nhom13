<?php 
require_once "models/m_order.php";
class c_order{
    
    public function index() {
        $m_order = new m_order();
        $row = $m_order->read_order();
        $view = "views/order/v_order.php";
        include "templates/layout.php";
        if(isset($_POST["update"])) {
            $status = $_POST["ds"];
            
            
            // $m_order->update_status($status,$id_order);
        }
    }
    
}