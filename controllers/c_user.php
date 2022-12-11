<?php
session_start();
include("models/m_user.php");

class c_user
{

    public function checkLogin()
    {
        $check = true;
        $m_user = new m_user();
        if (isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $this->saveLoginSession($email, $password);
            $users = $m_user->read_user_by_email($email);
        }
        if (isset($_SESSION["user"])) {
            if ($_SESSION["user"]) {
                header("location:index.php");
            } else {
                $check == false;
                $_SESSION['error_user'] = "Sai thông tin đăng nhập";
                header("location:login.php");
            }
        } else {
            if ($check == false) {
                $_SESSION['error_user'] = "Sai thông tin đăng nhập";
                header("location:login.php");
            }
            $_SESSION['error_user'] = "Sai thông tin đăng nhập";
            header("location:login.php");
        }
    }

    public function saveLoginSession($email, $password)
    {
        $m_user = new m_user();
        $user = $m_user->read_user_by_id_pass($email, $password);
        if (!empty($user)) {
            $_SESSION["user"] = $user;
        }
    }
    public function logout()
    {
        unset($_SESSION["user"]);
        header("location:index.php");
    }
    public function insertUser()
    {
        $m_user = new m_user();
        if (isset($_POST["btn"])) {
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $id_role = $_POST["id_role"];
            $pass2 = $_POST["password1"];
            // echo $email;
            if ($pass2 === $password) {


                $result = $m_user->addAccount($fullname, $email, md5($password), $id_role);

                if ($result) {
                    // echo print_r($result);
                    // die();

                    $result = $m_user->addAccount($fullname, md5($password), $email, $id_role);

                    if ($result) {
                        //     echo "<pre>";
                        // echo print_r($result);
                        // die();

                        header("location:login.php");
                    }
                } else {
                    echo '<script>alert("Mật khẩu không khớp")</script>';
                }
            }
        }
        

    }
    // info
    public function info_user() {

        $view = "views/info/v_info.php";
        include "templates/front-end/layout.php";
    }
    public function editUser()
    {
        if(isset($_POST["edit_profile"])){
            $email = $_POST["email"];
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $address = $_POST["address"];
            $id_user = $_SESSION["user"]->id_user;
            $m_user = new m_user();
            $result = $m_user->update_info($name,$email,$address,$phone,$id_user);
            if($result) {
                header("location:index.php");
            }else{
                echo "<script>alert('fail')</script>";
            }
        }
    }
}
