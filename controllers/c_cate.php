<?php

class c_cate
{
    public static function loadMenu()
    {
        require_once("models/m_cate.php");
        $m_category = new m_cate();
        $category = $m_category->read_cate();
        return $category;
    }
    public function Show_cate()
    {
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            include "models/m_cate.php";
            $m_cate = new m_cate();
            // echo $id;
            // die();
            $prodcut_by_cate = $m_cate->read_prd_by_cate($id);
            // echo print_r($prodcut_by_cate);
            // die();
        }
        $view = "views/cate/v_cate.php";
        include "templates/front-end/layout.php";
    }
    public function showAllShop() {
        include "models/m_cate.php";
        $showall = new m_cate();
        $read_all_prd_shop = $showall->readAllProduct();
        $view = "views/cate/v_shop.php";
        include "templates/front-end/layout.php";
    }
}
