<?php
include "models/m_product.php";
class c_product
{
    public function showAll()
    {
        $show = new m_product();
        $listProducts = $show->showProduct();
        $view = "views/product/v_product.php";
        include "templates/layout.php";
    }
    public function insertproduct()
    {
        $prodcut = new m_product();
        $read_prd_cate = $prodcut->read_cate();
        if (isset($_POST["btn-submit"])) {
            $ten_san_pham = $_POST['ten_san_pham'];
            $chose = $_POST['chose'];
            $mota = $_POST['mo_ta'];
            $don_gia = $_POST['don_gia'];
            $hinh = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] : "";
            $result = $prodcut->insertPrd($ten_san_pham, $hinh, $don_gia, $mota, $chose);

            if ($result) {
                if ($hinh != "") {
                    move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "../public/layout/img/product/" . $hinh);
                }

                header("location:product.php");
            } else {
                echo "<script>alert('thêm không thành công')</script>";
            }
        }
        $view = "views/product/v_addPrd.php";
        include "templates/layout.php";
    }
    public function deletePrd()
    {
        $delete = new m_product();
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $result = $delete->deleteProduct($id);
            if ($result) {
                header("location:product.php");
            } else {
            }
        }
    }
    public function editPrd()
    {
        if (isset($_GET["id"])) {
            $m_prd = new m_product();
            $read_cate = $m_prd->read_cate();
            $id = $_GET["id"];
            $showPrd_detail = $m_prd->read_prd_by_id($id);
            if (isset($_POST["btn"])) {
                $ten_san_pham = $_POST['ten_san_pham'];
                $chose = $_POST['chose'];
                $mota = $_POST['mo_ta'];
                $don_gia = $_POST['don_gia'];
                $hinh = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] : "";
                $result = $m_prd->edit_Prd($ten_san_pham, $hinh, $don_gia, $mota, $chose, $id);
                if ($result) {
                    if ($hinh != "") {
                        move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "../public/layout/img/product/$hinh");
                    }
                    header("location:product.php");
                } else {
                    echo "<script>alert('thêm không thành công')</script>";
                }
            }
        }
        $view = "views/product/v_editPrd.php";
        include "templates/layout.php";
    }
}
