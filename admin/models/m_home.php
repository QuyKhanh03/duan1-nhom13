<?php 
include "models/databaseAd.php";
class m_home extends database {
    public function count_user() {
        $sql = "select count(*) from users";
        $this->setQuery($sql);
        return $this->loadRecord();
    }
    public function count_product() {
        $sql ="select count(*) from products";
        $this->setQuery($sql);
        return $this->loadRecord();
    }
    public function count_categories() {
        $sql = "select count(*) from categories";
        $this->setQuery($sql);
        return $this->loadRecord();
    }
    public function thang12() {
        $sql ="SELECT sum(orders.totals) FROM orders 
        WHERE orders.date_order >='2022-12-01 00:00:16' AND orders.date_order <='2022-12-30 10:17:16'";
        $this->setQuery($sql);
        return $this->loadRecord();
    }
    public function tong_don_hang() {
        $sql = "SELECT count(*) from orders";
        $this->setQuery($sql);
        return $this->loadRecord();
    }
    public function binh_luan() {
        $sql = "select count(*) from comments";
        $this->setQuery($sql);
        return $this->loadRecord();
    }
}