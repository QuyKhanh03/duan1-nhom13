<?php 
include "models/databaseAd.php";
class m_user extends database {
    public function read_user() {
        $sql = "select * from roles ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function deleteuser($id) {
        $sql = "delete from users where id_user = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    public function insertuser($username, $password, $email,$chose)
    {
        $sql = "insert into users(username,password,email,id_role)
                values (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($username, $password, $email,$chose));
    }
    public function read_user_by_id_pass($email,$password) {
        $sql = "select * from users where email = ? and password = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email,md5($password)));
    }
    public function read_user_by_email($email) {
        $sql = "select * from users where email = ?";
        $this-> setQuery($sql);
        return $this->loadRow(array($email));
    }
    public function showUser()
    {
        $sql = "select * from users,roles where users.id_role = roles.id_role";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_user_by_id ($id) {
        $sql = "select username, email, id_role from users where id_user = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function update_user_by_id($username,$email,$chose,$id)
    {
        // $sql = "UPDATE `products` SET `name_product`='$ten_sp', `image`='$hinh',` price` ='$gia', `description` ='$mota', `cate_id`='$loai_sp',
        // where id = '$id'";
        $sql = "update users set username = ?,email = ?, id_role=? where
        id_user = ?";
        $this->setQuery($sql);
        return $this->execute(array($username,$email,$chose,$id));
    
    }
    
}