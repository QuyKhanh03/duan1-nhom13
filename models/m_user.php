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
    public function getUserById($id_user){
        $sql = "select * FROM users where id = $id_user"; 
        $this ->setQuery($sql);
        // lấy dữ liệu 
        return $this -> loadRow();
    }
    public function addAccount($username,$password,$email,$id_role) {
        $sql = "insert into users(username,password,email,id_role) 
        values (?,?,?,?) ";
        $this->setQuery($sql);
        return $this->execute(array($username,$password,$email,$id_role));
    }
    public function getOrderByIdUser($id) {
        $sql = "select orders.id_order, id_user, date_order, orders.totals, sum(order_details.quality) as 'total_quantity' FROM orders inner join order_details on orders.id_order = order_details.id_order GROUP by id_order having id_user = ?;"; 
        // select id_order id_user date totals total_quantity  
        $this ->setQuery($sql);
        return $this -> loadAllRows(array($id));
    }
    public function update_info($name,$email,$address,$phone,$id) {
        $sql = "update users set username = ?,email = ?,address = ?,phone =? where id_user = ?";
        $this->setQuery($sql);
        return $this->execute(array($name,$email,$address,$phone,$id));
    }
}