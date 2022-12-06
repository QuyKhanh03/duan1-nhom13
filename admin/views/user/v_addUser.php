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
                        <form class="form" action="" method="POST" enctype="multipart/form-data">
                            <h1>Thêm người dùng</h1>
                            <div class="mb-3">
                                <label  for="formFile" class="form-label">Họ tên</label>
                                <input style="border: 1px solid #333;" class="form-control" type="text" name="username" >
                            </div>
                            
                            <!-- <input type="text" name="ma_loai" placeholder="Mã loại">  -->
                            <div class="mb-3">
                                <label for="formFile" class="form-label">E-mail</label>
                                <input style="border: 1px solid #333;" class="form-control" type="text" name="email" >
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Password</label>
                                <input style="border: 1px solid #333;" class="form-control" type="text" name="password" charset="md5" >
                            </div>
                            
                            <div class="mb-3">
                            <select name="chose" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="width: 200px; padding: 8px;">
                                    <option selected>Vai trò</option>
                                    <?php
                                    foreach ($read_user_cate as $key => $value) { ?>
                                        <option value="<?php echo $value->id_role ?>"><?php echo $value->fullname ?></option>
                                    <?php }
                                    ?>
                                </select>
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