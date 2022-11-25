<?php
include "models/m_user.php";

class c_user
{
    public function showAllUser()
    {
        $show = new m_user();
        $listUsers = $show->showUser();
        $view = "views/user/v_user.php";
        include "templates/layout.php";
    }
    public function insertuser()
    {
        $user = new m_user();
        $read_user_cate = $user->read_user();
        if (isset($_POST["btn-submit"])) {
            $fullname = $_POST['fullname'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $chose = $_POST['chose'];
            $result = $user->insertuser($fullname, $username, $email, $password,$chose);

            if ($result) {
                header("location:admin/views/user/v_user.php");
            } else {
                echo "<script>alert('thêm không thành công')</script>";
            }
        }
        $view = "views/user/v_addUser.php";
        include "templates/layout.php";
    }
    public function deleteUser()
    {
        $delete = new m_user();
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $result = $delete->deleteuser($id);
            if ($result) {
                header("location:user.php");
            } else {
            }
        }
    }
    // public function editPrd()
    // {
    //     if (isset($_GET["id"])) {
    //         $m_prd = new m_product();
    //         $read_cate = $m_prd->read_cate();
    //         $id = $_GET["id"];
    //         $showPrd_detail = $m_prd->read_prd_by_id($id);
    //         if (isset($_POST["btn"])) {
    //             $ten_san_pham = $_POST['ten_san_pham'];
    //             $chose = $_POST['chose'];
    //             $mota = $_POST['mo_ta'];
    //             $don_gia = $_POST['don_gia'];
    //             $hinh = ($_FILES['f_hinh_anh']['error'] == 0) ? $_FILES['f_hinh_anh']['name'] : "";
    //             $results = $m_prd->update_product_by_id($ten_san_pham, $hinh, $don_gia, $mota, $chose, $id);
    //             if ($results==true) {
    //                 if ($hinh != "") {
    //                     move_uploaded_file($_FILES['f_hinh_anh']['tmp_name'], "../public/layout/img/product/$hinh");
    //                 }
    //                 // echo print_r($results);
    //                 // die();

    //                 header("location:product.php");
    //             } else {
    //                 echo "<script>alert('thêm không thành công')</script>";
    //             }
    //         }
    //     }
    //     $view = "views/product/v_editPrd.php";
    //     include "templates/layout.php";
    // }
    public function editUser()
    {
        if (isset($_GET['id'])) {
            $m_user = new m_user();
            $read_cate = $m_user->read_user();
            $id = $_GET['id'];
            $user_detail = $m_user->read_user_by_id($id);
            if (isset($_POST['btn'])) {
                $fullname = $_POST["fullname"];
                $username = $_POST['username'];
                $email = $_POST["email"];
                
                $role=$_POST["chose"];
                $result = $m_user->update_user_by_id($fullname,$username,$email,$role);
                if($result) {
                    
                    echo "<script>alert('thành công')</script>";
                    header("location:admin/views/user/v_user.php");
                }else{
                    echo "fail";
                }
            }
            
        }
        $view = "views/user/v_editUser.php";
        include("templates/layout.php");
    }

}
