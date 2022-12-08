<?php 
include "database.php";
class m_home extends database {
    public function loadAllPrd() {
        $sql = "select * from products";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function load_trend_prd(){
        $sql = "select * from products order by products.id desc limit 5";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}