<?php 
include "database.php";
 
class m_product extends database {
    // extends database là kế thừa từ database (là những hàm viết ở database.php)
    public function read_product_detail($id) {
        $sql = "select * from products,categories where products.id = '$id' and products.cate_id = categories.cate_id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function also($id_cate) {
        $id = $_GET["id"];
        $sql = "select * from products,categories where
        products.cate_id = '$id_cate' and categories.cate_id = '$id_cate' and products.id <> '$id'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function insert_cmt($des,$id_user,$id_prodcut) { 
        $sql = "INSERT INTO comments (des,id_user,id_product) values(?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($des,$id_user,$id_prodcut));
    }
    public function read_comment($id) {
        $sql = "select * from comments where id_product = '$id'";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
    // đếm số lượng bình luận
    public function read_count_comment($id) {
        // echo $id;
        $sql = "select count(*) from comments where id_product = '$id'";
        $this->setQuery($sql);
        return $this->loadRecord(array($id));
    }
}