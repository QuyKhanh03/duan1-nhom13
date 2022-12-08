<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table" border="1">
                            <thead class="table-dark">
                                <tr>
                                    <td width="130px">Tên sản phẩm</td>
                                    <td>Hình</td>
                                    <td width="80px">Giá tiền</td>
                                    <td>mô tả</td>
                                    <td>Số lượng sản phẩm trong kho</td>
                                    <td width="130px">loại sản phẩm</td>
                                    <td width="90px">#</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($listProducts as $key => $value) { ?>
                                <tr>
                                    <td><?php echo $value->name_product ?></td>
                                    <td><img width="150px" height="160px" src="../public/layout/img/product/<?php echo $value->image ?>" alt=""></td>
                                    <td><?php echo $value->price ?></td>
                                    <td><?php echo $value->description ?></td>
                                    <td><?php echo $value->quantity ?></td>
                                    <td><?php echo $value -> name  ?></td>
                                    <td><a onclick="return delete_by_name('<?php echo $value->name_product ?>')" href="deletePrd.php?id=<?php echo $value->id ?>"><i class="fa-solid fa-trash"></i></a> <span style="margin: 0 8px;"></span> <a href="editProduct.php?id=<?php echo $value->id ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<script>
    function delete_by_name(name) {
        return confirm("Bạn có chắc chắn muốn xóa sản phẩm :" +name+" không ?")
    }
</script>