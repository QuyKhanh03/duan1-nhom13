<?php 
include "databaseAd.php";
class m_order extends database {
    public function read_order() {
        $sql = "SELECT users.username,orders.date_order,orders.id_order,orders.totals,orders.status  FROM users, orders WHERE users.id_user=orders.id_user ORDER BY orders.id_order DESC ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function update_status($status,$id_order) {
        $sql = "update orders set status = ? where id_order = ?";
        $this->setQuery($sql);
        return $this->execute(array($status,$id_order));
    }
    public function read_order_by_id($id) {
        $sql = "select * from orders where id_order = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    public function read_order_detail($id) {
        $sql = "select * from order_details
        JOIN orders ON orders.id_order
         WHERE order_details.id_order = ? AND orders.id_order= ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id,$id));
    }
    public function read_all_order_detail($id) {
        $sql = "select * from order_details where id_order = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    public function read_info_by_id_order($id) {
        $sql = "SELECT * FROM `orders` JOIN users on users.id_user=orders.id_user WHERE orders.id_order = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    
}