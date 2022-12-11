<?php
include "models/m_user.php";
session_start();
class c_user
{
    public function showAllUser()
    {
        $show = new m_user();
        $listUsers = $show->showUser();
        $view = "views/user/v_user.php";
        include "templates/layout.php";
    }
    public function insertUser()
    {
        $user = new m_user();
        $read_user_cate = $user->read_user();
        if (isset($_POST["btn-submit"])) {
            
            $username = $_POST['username'];
            $email = $_POST["email"];
            $password=$_POST["password"];
            $chose = $_POST['chose'];
            $result = $user->insertuser( $username, md5($password),$email,$chose);

            if ($result) {
                header("location:user.php");
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
    public function editUser()
    {
        if (isset($_GET['id'])) {
            $m_user = new m_user();
            $read_cate = $m_user->read_user();
            $id = $_GET['id'];
            $user_detail = $m_user->read_user_by_id($id);
            if (isset($_POST['btn'])) {
                
                $username = $_POST["username"];
                $email = $_POST["email"];
                
                $role=$_POST["chose"];
                $result = $m_user->update_user_by_id($username,$email,$role,$id);
                if($result) {
                    header("location:user.php");
                }else{
                    echo "fail";
                }
            }
            
        }
        $view = "views/user/v_editUser.php";
        include("templates/layout.php");
    }
    public function logout()
    {
        unset($_SESSION["user"]);
        header("location:../index.php");
    }
    public function checkLoginAdmin()
    {
        if (isset($_POST['login'])) {
            $username = $_POST['email'];
            $password = $_POST['password'];
            $this->saveLoginSession($username, $password);
            if (isset($_SESSION['user'])&& $_SESSION["user"]->id_role==1) {
                header("location:home.php");
            } else {
                $_SESSION['error_login'] = "Sai thông tin đăng nhập";
                header("location:login-admin.php");
            }
        }
    }
    public function saveLoginSession($username, $password)
    {
        $m_user = new m_user();
        $user = $m_user->read_user_by_id_pass($username, $password);
        if (!empty($user)) {
            $_SESSION['user'] = $user;
        }
    }
}
