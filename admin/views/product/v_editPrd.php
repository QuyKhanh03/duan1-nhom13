<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Dashboard</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
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
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                        <h6 class="text-white">Dashboard</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                        <h6 class="text-white">Charts</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                        <h6 class="text-white">Widgets</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                        <h6 class="text-white">Tables</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                        <h6 class="text-white">Full Width</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-danger text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                        <h6 class="text-white">Forms</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                        <h6 class="text-white">Buttons</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                        <h6 class="text-white">Elements</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
                        <h6 class="text-white">Calnedar</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <div class="box bg-warning text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                        <h6 class="text-white">Errors</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form" action="" method="POST" enctype="multipart/form-data">
                            <h1>Sửa sản phẩm</h1>
                            <div class="mb-3">
                                <label  for="formFile" class="form-label">Tên sản phẩm</label>
                                <input style="border: 1px solid #333;" value="<?php echo $product_detail->name_product ?>" class="form-control" type="text" name="ten_san_pham" placeholder="Tên sản phẩm">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Chọn ảnh sản phẩm</label>
                                <input style="border: 1px solid #333;" class="form-control" id="formFile" type="file" name="f_hinh_anh">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-lable fs-3">Hoặc giữ lại ảnh cũ</label>
                                <input id="img-old" name="img-old" type="text" hidden class="form-control fs-4" value="<?php echo $product_detail->image ?>"> <br>
                                <img src="../public/layout/img/product/<?php echo $product_detail->image ?>" alt="">
                            </div>
                            <!-- <input type="text" name="ma_loai" placeholder="Mã loại">  -->
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nhập đơn giá</label>
                                <input style="border: 1px solid #333;" class="form-control" value="<?php echo $product_detail->price ?>" type="text" name="don_gia" placeholder="Đơn giá">
                            </div>
                            <div class="mb-3">
                                <select name="chose" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="width: 200px; padding: 8px;">
                                    <option selected>Chọn loại sản phẩm</option>
                                    <?php
                                    foreach ($read_cate as $key => $value) { ?>
                                        <option value="<?php echo $value->cate_id ?>"><?php echo $value->name ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                            <textarea style="border: 1px solid #333;padding: 10px;"  name="mo_ta" placeholder="Mô tả" rows="10" id="" cols="156">
                                <?php echo $product_detail->description ?>
                            </textarea>
                            </div>
                            <input  style="width: 200px;height: 45px;" class="btn btn-secondary" type="submit" name="btn">
                        </form>
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