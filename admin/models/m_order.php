<?php 
include "databaseAd.php";
class m_order extends database {
    public function read_order() {
        $sql = "SELECT users.username,orders.date_order,orders.id_order,orders.totals,orders.status  FROM users, orders WHERE users.id_user=orders.id_user";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function update_status($a,$b) {
        $sql = "update orders set status = ? where id_order = ?";
        $this->setQuery($sql);
        return $this->execute(array($a,$b));
    }
}