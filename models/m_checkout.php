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
    public function delete_order_by_id ($id) { 
        $sql1 = "delete from orders where id_order = ?";
        $this->setQuery($sql1);
        return $this->execute(array($id));
    }
    public function read_order_by_id($id) {
        $sql = "select orders.date_order, orders.totals as 'total_price', order_details.name_product,order_details.picture, order_details.price, order_details.quality FROM orders inner join order_details on orders.id_order = order_details.id_order where orders.id_order = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    public function update_quantity($id,$quantily) {
        $sql = "UPDATE products SET products.quantity = products.quantity - '$quantily' where id = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }
    public function update_user($phone,$address,$id) {
        $sql = "UPDATE users set users.phone = ?, users.address = ? where id_user = ?";
        $this->setQuery($sql);
        return $this->execute(array($phone,$address,$id));
    }
   
}
