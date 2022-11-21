<?php
require_once "databaseAd.php";
class m_product extends database
{
    // hiển thị ra danh sách sản phẩm
    public function showProduct()
    {
        $sql = "select * from products,categories where products.cate_id = categories.cate_id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    // xóa sản phẩm theo id
    public function deleteProduct($id)
    {
        $sql = "delete from products  where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    // thêm sản phẩm 
    public function insertPrd($ten_sp, $hinh, $gia, $mota, $loai_sp)
    {
        $sql = "insert into products(name_product,image,price,description,cate_id)
                values ('$ten_sp','$hinh','$gia','$mota','$loai_sp')";
        $this->setQuery($sql);
        return $this->execute(array($ten_sp, $hinh, $gia, $mota, $loai_sp));
    }
    // sửa sản phẩm theo id
    public function edit_Prd($ten_sp, $hinh, $gia, $mota, $loai_sp,$id)
    {
        $sql = "update products set name_product = '$ten_sp', image= '$hinh', price = '$gia', description = '$mota', cate_id ='$loai_sp',
        where id = '$id'";
        $this->setQuery($sql);
        return $this->execute(array($ten_sp,$hinh,$gia,$mota,$loai_sp, $id));
    }
    // danh muc
    public function read_cate()
    {
        $sql = "select * from categories ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    // đọc sản phẩm theo id 
    public function read_prd_by_id ($id) {
        $sql = "select * from products where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
}
