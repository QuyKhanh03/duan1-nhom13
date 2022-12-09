<?php 
class c_home {
    public function home() {
        include "models/m_home.php";
        $m_home = new m_home();
        $total_user = $m_home->count_user();
        $total_product = $m_home->count_product();
        $total_categories = $m_home->count_categories();
        $tong_doanh_thu_thang12 = $m_home->thang12();
        $tong_don_hang = $m_home->tong_don_hang();
        $tong_binh_luan = $m_home->binh_luan();
        $view = "views/home/v_home.php";
        include "templates/layout.php";
    }
    
}