<div class="page-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h2>My profile</h2>
                        <p>Manage profile information for account security</p>
                        <hr>
                        <form action="acction-info.php" style="width: 400px;" method="POST">
                            <div class="mb-3">
                                <label for="" class="form-lable">Email</label>
                                <input name="email" class="form-control" type="text" value="<?php echo $_SESSION["user"]->email ?>">
                            </div>      
                            <div class="mb-3">
                                <label for="" class="form-lable">Name</label>
                                <input name="name" class="form-control" type="text" value="<?php echo $_SESSION["user"]->username ?>">
                            </div>   
                            <div class="mb-3">
                                <label for="" class="form-lable">Phone</label>
                                <input name="phone" class="form-control" type="text" value="<?php echo $_SESSION["user"]->phone ?>">
                            </div>   
                            <div class="mb-3">
                                <label for="" class="form-lable">Address</label>
                                <input name="address" class="form-control" type="text" value="<?php echo $_SESSION["user"]->address ?>">
                            </div>       
                            <button name="edit_profile" type="submit" style="background:#262626 ;color: #fff;" class="btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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