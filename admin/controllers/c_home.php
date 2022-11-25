<?php 
class c_home {
    public function home() {
        include "models/m_home.php";
        $m_home = new m_home();
        $total_user = $m_home->count_user();
        $total_product = $m_home->count_product();
        $total_categories = $m_home->count_categories();


        $view = "views/home/v_home.php";
        include "templates/layout.php";
    }
}