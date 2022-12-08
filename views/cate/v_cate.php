<main>
    <section class="breadcrumb-area breadcrumb-bg" data-background="public/layout/img/bg/breadcrumb_bg01.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Shop Sidebar</h2>
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
    <section class="shop-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="shop-top-meta mb-35">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="shop-top-left">
                                    <ul>
                                        <li><a href="#"><i class="flaticon-menu"></i> FILTER</a></li>
                                        <li>Showing 1–9 of 80 results</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="shop-top-right">
                                    <form action="#">
                                        <select name="select">
                                            <option value="">Sort by newness</option>
                                            <option>Free Shipping</option>
                                            <option>Best Match</option>
                                            <option>Newest Item</option>
                                            <option>Size A - Z</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($prodcut_by_cate as $key => $value) { ?>
                            <div class="col-xl-4 col-sm-6">
                                <div class="new-arrival-item text-center mb-50">
                                    <div class="thumb mb-25">
                                        <!-- <div class="discount-tag" style="margin-left: 20px;">- %</div> -->
                                        <a href="prd_detail.php?id=<?php echo $value->id ?>"><img style="width: 250px; height: 280px;" src="public/layout/img/product/<?php echo $value->image ?>" alt=""></a>
                                        <div class="product-overlay-action">
                                            <ul>
                                                <li><a href="cart.html"><i class="far fa-heart"></i></a></li>
                                                <li><a href="prd_detail.php?id=<?php echo $value->id ?>"><i class="far fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h5><a href="prd_detail.php?id=<?php echo $value->id ?>"><?php echo $value->name_product ?></a></h5>
                                        <span class="price"><?php echo $value->price ?> $</span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="pagination-wrap">
                        <ul>
                            <li class="prev"><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>
                            <li class="next"><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <aside class="shop-sidebar">
                        <div class="widget side-search-bar">
                            <!-- <form action="#">
                                <input type="text">
                                <button><i class="flaticon-search"></i></button>
                            </form> -->
                        </div>
                        <div class="widget">
                            <h4 class="widget-title">Product Categories</h4>
                            <div class="shop-cat-list">
                                <?php
                                require_once "controllers/c_cate.php";
                                $category = c_cate::loadMenu();
                                ?>
                                <ul>
                                    <?php foreach ($category as $key => $value) { ?>
                                        <li><a href="cate.php?id=<?php echo $value->cate_id ?>"><?php echo $value->name ?></a></li>
                                    <?php } ?>
                                    <!-- <li><a href="#">Accessories</a></li>
                                    <li><a href="#">Computer</a><span>(4)</span></li> -->
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- shop-area-end -->

</main>