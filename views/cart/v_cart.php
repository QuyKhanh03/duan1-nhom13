<?php
// echo "<pre>";
// echo print_r($_SESSION["cart"]);

?>

<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="public/layout/img/bg/breadcrumb_bg03.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Cart Page</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
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

            <div class="row">
                <div class="col-12">
                    <form action="" method="POST">
                        <div class="cart-wrapper">
                            <div class="table-responsive">
                                <?php if (isset($_SESSION["cart"])&& !empty($_SESSION["cart"])) { ?>
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail"></th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">QUANTITY</th>
                                            <th class="product-subtotal">SUBTOTAL</th>
                                            <th class="product-delete"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $totals = 0;
                                        $qty = 0;
                                        $subtotal = 1;
                                            foreach ($_SESSION["cart"] as $key) { ?>
                                               <tr>
                                                    <td class="product-thumbnail"><a href="#"><img src="public/layout/img/product/<?php echo $key[2] ?>" alt=""></a></td>
                                                    <td class="product-name">
                                                        <h4><a href="#"><?php echo $key[1]  ?></a></h4>
                                                    </td>
                                                    <td class="product-price"> <?php echo $key[3]  ?> VNĐ</td>
                                                    <td class="product-quantity">
                                                        <input id="price" type="hidden" name="price" value="<?php echo $key[3] ?>">
                                                        <?php  ?>
                                                        <?php echo $key[4] ?>          
                                                    </td>
        
                                                    <?php
                                                    
                                                    $subtotal = $key[4] * $key[3];
                                                    $totals += $subtotal;
                                                    ?>
                                                    <td class="product-subtotal"><span id="subtotal"> <?php echo $subtotal ?> VND</span></td>
                                                    <td class="product-delete"><a href="delete_cart.php?id_cart=<?php echo $key[0] ?>"><i class="flaticon-trash"></i></a></td>
                                                </tr>     
                                        <?php

                                            }
                                          ?>
                                    </tbody>      
                                    <tr>
                                        <td>Totals</td>
                                        <td><?php echo $totals ?> VNĐ</td>
                                    </tr>
                                </table>
                                <?php } else{
                                    
                                } ?>
                            </div>
                        </div>
                        <!-- <button>Update cart</button> -->
                    </form>
                    <a style="margin: 30px 0 ; background-color: #36363b; color: #fff" class="btn" href="bills.php" >Order Placed</a>
                    <!-- <a href="checkout.php" class="btn" style="margin: 30px 0 ; background-color: #36363b; color: #fff">PROCEED TO CHECKOUT</a> -->
                    <form action="checkout.php" method="POST" onsubmit="return confirm('Ban co chac chan muon dat hang')">
                        <label for="phone">Phone</label>
                        <input required type="text" name="phone" style="display: block;padding: 5px;width: 300px;" placeholder="Phone ...">
                        <label style="margin-top: 10px;" for="address">Delivery address</label>

                        <textarea required name="address" id="address" cols="100%" rows="5" style="display: block; padding: 10px; margin-top: 10px;" placeholder="Delivery address..."></textarea>

                        <input type="hidden" value="<?php echo $totals  ?>" name="tongtien">
                        <button name="create-order" class="btn" style="margin: 30px 0 ; background-color: #36363b; color: #fff">Thanh toán Offline</button>
                        
                        <input type="hidden" name="total_congthanhtoan" value="<?php echo $totals ?>">
                        <button name="captureWallet" class="btn" style="margin: 20px 0 ;display:in; background-color: #36363b; color: #fff ">Thanh toán QR MOMO</button>
                    

                        <input type="hidden" name="total_congthanhtoan" value="<?php echo $totals ?>">
                        <button name="payWithATM" class="btn" style="margin: 20px 0 ; background-color: #36363b; color: #fff">Thanh toán ATM MOMO</button>

                    </form>
                </div>
            </div>
        </div>


    </div>
    </div>
    <!-- cart-area-end -->

</main>
<script>
    // function myFunction() { 
    //     var quantity = document.getElementById("quantity");
    //     var price = document.getElementById("price");
    //     var subtotal = document.getElementById("subtotal");
    //     subtotal.innerText = quantity.value*price.value
    // }
</script>