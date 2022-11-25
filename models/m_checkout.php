<?php 
require "database.php";
class m_checkout extends database {
    public function them_khach_hang ($ten,$ngay_sinh,$dia_chi,$dien_thoai,$email,$ghi_chu) {
        $sql = "INSERT INTO customers(fullname,date,address,phone,email,noted)";
        $sql .= "VALUES(?,?,?,?,?,?)";
        $this->setQuery($sql);
        $result =  $this->execute(array($ten,$ngay_sinh,$dia_chi,$dien_thoai,$email,$ghi_chu));
        if($result) {
            $this->getLastId(); //nếu câu truy vấn chạy thành công thì nó sẽ trả về lastId trong bảng cus
        }else {
            false;
        }
    }
    public function insertOrder($date_order,$id_user,$totals,$payments) {
        // `id_order`, `date_order`, `id_user`, `totals`, `payments`, `status`
        $sql = "INSERT INTO orders (date_order,id_user,totals,payments) VALUES(?,?,?,?)";
        $this->setQuery($sql);
        $result= $this->execute(array($date_order,$id_user,$totals,$payments));
        if($result) {
            $this->getLastId();
        }else {
            false;
        }
    }
    public function orderDetail($number_order,$id_product,$quantily,$sub_total) {
        $sql = "INSERT INTO order_details(number_order,id_product,quantily,sub_total) values(?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($number_order,$id_product,$quantily,$sub_total));
    }
}