<?php 
class c_home {
    public function index() {
        include "models/m_home.php";
        

        $view = "views/home/v_home.php";
        include "templates/layout.php";
    }
}