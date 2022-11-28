<?php
require "database.php";
class m_checkout extends database
{
    public function insertOrder($id_user, $totals)
    {
        // `id_order`, `date_order`, `id_user`, `totals` `status`
        $sql = "INSERT INTO orders(id_user,totals) VALUES(?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id_user, $totals));
    }
    public function orderDetail($name_product, $quantily, $id_order, $sub_total, $image)
    {
        // `name_product`, `quality`, `id_order`, `price`, `picture`
        $sql = "INSERT INTO order_details(name_product,quality,id_order,price,picture)
         values(?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array( $name_product, $quantily, $id_order, $sub_total, $image));
    }
    public function getOrder()
    {
        $sql = "select * FROM orders order by date_order desc";
        $this->setQuery($sql);
        // lấy dữ liệu 
        return $this->loadAllRows(array());
    }
}
