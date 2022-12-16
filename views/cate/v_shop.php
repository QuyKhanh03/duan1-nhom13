<main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg" data-background="public/layout/img/bg/breadcrumb_bg01.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2>Our Shop</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- shop-area -->
        <section class="shop-area pt-95 pb-100">
            <div class="container">
                <div class="shop-top-meta mb-35">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="shop-top-left">
                                <ul>
                                    <li>Showing 1–9 of 80 results</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach($read_all_prd_shop as $key => $value) { ?>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="new-arrival-item text-center mb-50">
                            <div class="thumb mb-25">
                                <a href="prd_detail.php?id=<?php echo $value->id ?>"><img style="width: 270px; height: 290px;" src="public/layout/img/product/<?php echo $value->image ?>" alt=""></a>
                                <div class="product-overlay-action">
                                    <ul>
                                        
                                        <li><a href="prd_detail.php?id=<?php echo $value->id ?>"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="prd_detail.php?id=<?php echo $value->id ?>"><?php echo $value->name_product ?></a></h5>
                                <span class="price">$<?php echo $value->price ?></span>
                            </div>
                        </div>
                    </div>
                   <?php } ?>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="shop-more-btn text-center">
                            <a href="shop.html" class="btn">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-area-end -->

    </main>