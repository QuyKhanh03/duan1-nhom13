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
    public function insertuser($fullname, $username, $password, $email,$role)
    {
        $sql = "insert into users(fullname,username,password,email,time,role)
                values ('$fullname','$username','$password','$email',?,'$role')";
        $this->setQuery($sql);
        return $this->execute(array($fullname, $username, $password, $email,$role));
    }
    public function showUser()
    {
        $sql = "select * from users,roles where users.id_role = roles.id_role";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_user_by_id ($id) {
        $sql = "select * from users where id_user = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    public function update_user_by_id($fullname, $username,$email, $id_role,$id)
    {
        // $sql = "UPDATE `products` SET `name_product`='$ten_sp', `image`='$hinh',` price` ='$gia', `description` ='$mota', `cate_id`='$loai_sp',
        // where id = '$id'";
        $sql = "update users set fullname = ?,username = ?,password = ?,email = ?,date_registration=?, id_role=? where
        id_user = ?";
        $this->setQuery($sql);
        return $this->execute(array($fullname,$username,$email, $id_role,$id));
    
    }
    
}