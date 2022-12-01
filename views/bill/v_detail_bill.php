<?php
// echo print_r($_SESSION["cart"]);
?>

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="public/layout/img/bg/breadcrumb_bg03.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Your Bill</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Bill</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <?php


    ?>
    <!-- cart-area -->
    <div class="cart-area pt-100 pb-100">
        <div class="container">
            <?php
            //  echo print_r($order);
              ?>
            <div class="row">
                <div class="col-12">
                    <form action="" method="POST">
                        <div class="cart-wrapper">
                            <div class="table-responsive">

                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <td>Ảnh</td>
                                            <td>Tên sản phẩm</td>
                                            <td>Số lượng</td>
                                            <td>Giá</td>
                                            <td>Tổng tiền</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        foreach($order as $key=> $value) {
                                        ?>
                                        <tr>
                                            <td><img src="public/layout/img/product/<?php echo $value->picture?>" alt=""></td>
                                            <td><?php echo $value->name_product ?></td>
                                            <td><?php echo $value->quality ?></td>
                                            <td><?php echo $value->price ?></td>
                                            <td><?php echo ($value->quality*$value->price)  ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>


    </div>
    </div>
    <!-- cart-area-end -->

</main>