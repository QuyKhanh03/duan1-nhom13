<?php 
require_once "database.php";
class m_cate extends database {
    public function read_cate() {
        $sql = "select * from categories";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_prd_by_cate ($id) {
        $sql = "select * from products 
        join categories on categories.cate_id 
        where categories.cate_id = ? and products.cate_id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id,$id));
    }
    public function readAllProduct($search) {
        $sql = "select * from products,categories where products.cate_id = categories.cate_id and products.name_product like '%$search%' ";
        $this->setQuery($sql);
        return $this->loadAllRows(array($search));
    }
}