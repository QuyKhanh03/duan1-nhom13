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
}