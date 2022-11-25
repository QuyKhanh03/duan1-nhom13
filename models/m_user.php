<?php 
include "database.php";
class m_user extends database {
    public function read_user_by_id_pass($email,$password) {
        $sql = "select * from users where email = ? and password = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email,md5($password)));
    }
    public function read_user_by_idrole() {
        $sql = "select * from users where id_role = 2";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_user_by_email($email) {
        $sql = "select * from users where email = ?";
        $this-> setQuery($sql);
        return $this->loadRow(array($email));
    }
    public function addAccount($username,$password,$email,$id_role) {
        $sql = "insert into users(fullname,password,email,id_role) 
        values (?,?,?,?) ";
        $this->setQuery($sql);
        return $this->execute(array($username,$password,$email,$id_role));
    }
}