<?php 
// session_start();
class c_product {
    public function product_detail() {
        if(isset($_GET["id"])) {
            require_once "models/m_product.php";
            $m_prd = new m_product();
            $id = $_GET["id"];
            $prd_detail = $m_prd->read_product_detail($id);
            foreach($prd_detail as $key => $item) {
                $cate_id = $item->cate_id;
                $also = $m_prd->also($cate_id);
            }
            $list_cmt = $m_prd->read_comment($id);
            $count_cmt = $m_prd->read_count_comment($id);
        }

        // tạm thời chưa cần lấy dữ liệu ra, cứ view ra đc layout đã rồi tính
        $view = "views/cate/v_prd_detail.php";
        // sau khi tạo đc biến view thì phải inclulde layout.php 
        include "templates/front-end/layout.php";
    }
    public function add_cmt() { 
        if(isset($_POST["btn-comment"])) { 
            include "models/m_product.php";
            $des = $_POST["des"];
                $id_user = $_POST["id_user"];
                $id_product = $_POST["id_product"];
                $m_prd = new m_product();
                $result = $m_prd->insert_cmt($des,$id_user,$id_product);
                if($result){
                    header("location:prd_detail.php?id=" .$id_product);
                }
        }
    }
}