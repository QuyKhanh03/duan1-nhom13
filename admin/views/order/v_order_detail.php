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
                       
                        <div class="tab-content default-tab" id="tab1">

                            <fieldset>
                                <strong>
                                    <font color="#993300">
                                        <p>
                                            <label><span style="margin-left:50px">Ngày lập hóa đơn: <?php echo date("d/m/Y", strtotime($order_details->date_order)) ?></span></label>
                                        </p>
                                        <p>
                                            <label>Trị giá: <?php echo $order_details->totals ?> $</label>
                                        </p>
                                        <p>
                                            <label>Họ tên khách hàng: <?php echo $info->username ?></label>
                                        </p>
                                        <p>
                                            <label>Địa chỉ: <?php echo $info->address ?></label>
                                            <label><span style="margin-left:20px">Điện thoại: <?php echo $info->phone ?></span></label>
                                            <label><span style="margin-left:20px">Email: <?php echo $info->email ?></span></label>
                                        </p>
                                    </font>
                                    <strong>
                            </fieldset>
                           
                            <table class="table" border="1">
                                <thead class="table-dark">
                                    <tr>
                                        <td>Tên sản phẩm</td>
                                        <td>Ảnh sản phẩm</td>
                                        <td>Số lượng</td>
                                        <td>Đơn giá</td>
                                        <td>Thành tiền</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $tong = 0;
                                    foreach ($all as $key => $value) { ?>
                                        <tr>
                                            <td><?php echo $value->name_product ?></td>
                                            <td><img src="../public/layout/img/product/<?php echo $value->picture ?>" alt=""></td>
                                            <td><?php echo  $value->quality ?></td>
                                            <td><?php echo $value->price ?></td>
                                            <td><?php echo ($value->quality * $value->price) ?></td>
                                        </tr>
                                    <?php
                                        $tong += ($value->quality * $value->price);
                                    } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4">
                                            <p><input class="button print" type="button" value="In hóa đơn " name="btnIn" onclick="window.print()" /></p>
                                           
                                        </td>
                                        <td colspan="2">
                                            <div class="pagination">
                                                <h4>Tổng thành tiền: <?php echo $tong ?> $</h4>
                                            </div>
                                           
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
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