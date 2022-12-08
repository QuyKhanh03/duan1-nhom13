<?php 
include "models/m_comments.php";
class c_comments {
    public function index() {
        $m_cmt = new m_comment();
        $list_cmt = $m_cmt->read_comment();
        $view = "views/comments/v_comment.php";
        include "templates/layout.php";
    }
    public function del_cmt() {
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
            $m_cmt = new m_comment();
           $result = $m_cmt->delete_cmt_by_id($id);
           if($result){
            header("location:comments.php");
           }
        }
    }
}