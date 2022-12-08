<?php 
include "models/databaseAd.php";
class m_comment extends database {
    public function read_comment() {
        $sql = "SELECT comments.id, comments.des,comments.time,users.username,products.name_product FROM comments,users JOIN products ON products.id
        WHERE comments.id_user = users.id_user AND comments.id_product = products.id ORDER BY comments.time DESC ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function delete_cmt_by_id ($id) {
        $sql = "DELETE FROM comments where comments.id = '$id'";
        $this->setQuery($sql);
        return $this->execute();
    }
}