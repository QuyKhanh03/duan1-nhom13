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
            // echo print_r($_SESSION["user"]);
            // die();
            if ($_SESSION["user"]->id_role == 2) {
                header("location:index.php");
                
            }else if($_SESSION["user"]->id_role ==1) {
                header("location:admin/home.php");
                
            }
            else {
                $check == false;
                header("location:login.php");
            }
        } else {
            if ($check == false) {
                header("location:login.php");
            }
            header("location:login.php");
        }
    }
    public function saveLoginSession($email, $password)
    {
        $m_user = new m_user();
        $user = $m_user->read_user_by_id_pass($email, $password);
        // echo print_r($user); 
        // die();
        if (!empty($user)) {
            $_SESSION["user"] = $user;
            // echo "....";
            // echo print_r($_SESSION["user"]);
            // die();
        }
    }
    public function logout()
    {
        unset($_SESSION["user"]);
        header("location:index.php");
    }
    public function insertUser() {
        $m_user = new m_user();
        if(isset($_POST["btn"])) {
            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $id_role = $_POST["id_role"];
           
            $pass2 = $_POST["password1"];
            // echo $email;
            if($pass2 === $password) {
                
                $result = $m_user->addAccount($fullname,$email,md5($password),$id_role);
                
                if($result) {
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
