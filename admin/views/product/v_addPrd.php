<div class="page-wrapper">

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
                        <form class="form" action="" method="POST" enctype="multipart/form-data">
                            <h1>Thêm sản phẩm</h1>
                            <div class="mb-3">
                                <label  for="formFile" class="form-label">Tên sản phẩm</label>
                                <input style="border: 1px solid #333;" class="form-control" type="text" name="ten_san_pham" placeholder="Tên sản phẩm">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Chọn ảnh sản phẩm</label>
                                <input style="border: 1px solid #333;" class="form-control" type="file" id="formFile" name="f_hinh_anh">
                            </div>
                            <!-- <input type="text" name="ma_loai" placeholder="Mã loại">  -->
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nhập đơn giá</label>
                                <input style="border: 1px solid #333;" class="form-control" type="text" name="don_gia" placeholder="Đơn giá">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Nhập số lượng</label>
                                <input style="border: 1px solid #333;" class="form-control" type="text" name="so_luong" placeholder="Số lượng">
                            </div>
                            <div class="mb-3">
                                <select name="chose" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="width: 200px; padding: 8px;">
                                    
                                    <?php
                                    foreach ($read_prd_cate as $key => $value) { ?>
                                        <option value="<?php echo $value->cate_id ?>"><?php echo $value->name ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                            <textarea style="border: 1px solid #333;padding: 10px;"  name="mo_ta" placeholder="Mô tả" rows="10" id="" cols="156"></textarea>
                            </div>
                            <input value="Thêm" style="width: 200px;height: 45px;" class="btn btn-secondary" type="submit"  name="btn-submit">
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