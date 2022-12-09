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
                <div class="card-body" >
                        <div class="row" >
                            <div style="margin-left: 100px;" >Tổng doanh thu trong tháng 12 : <b><?php echo $tong_doanh_thu_thang12 ?> $</b></div> 
                        </div>
                        <div class="row" >
                            <div style="margin-left: 100px;" >Tổng số lượng các đơn hàng : <b><?php echo $tong_don_hang  ?></b></div> 
                        </div>
                        <div class="row" >
                            <div style="margin-left: 100px;" >Tổng số lượng các sản phẩm : <b><?php echo $total_product  ?></b></div> 
                        </div>
                        <div class="row" >
                            <div style="margin-left: 100px;" >Tổng số lượng các danh mục : <b><?php echo $total_categories  ?></b></div> 
                        </div>
                        <div class="row" >
                            <div style="margin-left: 100px;" >Tổng số lượng các bình luận : <b><?php echo $tong_binh_luan ?></b></div> 
                        </div>
                        <div class="row" >
                            <div style="margin-left: 100px;" >Tổng số lượng các khách hàng : <b><?php echo  $total_user  ?></b></div> 
                        </div>
                        <div class="row" >
                            <!-- <div style="margin-left: 100px;" >Sản phẩm bán chạy nhất : <b><?php echo $tong_don_hang  ?></b></div>  -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <canvas id="myChart" style="width:100%;max-width:600px;margin: auto;"></canvas>
                            <script>
                                var xValues = ["Tổng sản phẩm", " Tổng người dùng", "Loại sản phẩm"];
                                var yValues = [<?php echo $total_product ?>, <?php echo $total_user ?>, <?php echo $total_categories ?>]
                                var barColors = [
                                    "#b91d47",
                                    "#00aba9",
                                    "#2b5797",


                                ];
                                new Chart("myChart", {
                                    type: "pie",
                                    data: {
                                        labels: xValues,
                                        datasets: [{
                                            backgroundColor: barColors,
                                            data: yValues
                                        }]
                                    },
                                    options: {
                                        title: {
                                            display: true,
                                            text: ""
                                        }
                                    }
                                });
                            </script>

                        </div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>