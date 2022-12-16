<header>
    <div class="header-top-wrap">
        <div class="container custom-container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-3 col-lg-4 d-none d-lg-block">
                    <div class="logo">
                        <a href="index.php"><img src="public/layout/img/logo/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5 col-md-6">
                    <div class="header-top-offer">
                        <p>WINTER SALE UP TO <span>70% OFF.</span> SHOP NOW</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="header-top-action">
                        <ul>
                            <?php
                             if(isset($_SESSION["user"])) {
                                echo '<a href="info.php">Hello '. $_SESSION["user"]->username .'</a>' . '<a style="margin-left:10px; color: #000;" name="func" href="logout.php?func=exit"><i class="fa-solid fa-right-from-bracket"></i></a>';
                            } else {
                                echo '<li class="sign-in"><a href="login.php">Sign In</a></li>';
                            } ?>
                            <li style="margin: 0 10px;" class="header-shop-cart"><a href="cart.php"><i class="flaticon-shopping-bag"></i></a>
                            <ul class="minicart">
                                <?php
                                 foreach($_SESSION["cart"] as $key) {
                                    ?>
                                        <li class="d-flex align-items-start">
                                            <div class="cart-img">
                                                <a href="#"><img src="public/layout/img/product/<?php echo $key[2] ?>" alt=""></a>
                                            </div>
                                            <div class="cart-content">
                                                <h4><a href="#"><?php echo $key[1] ?></a></h4>
                                                <div class="cart-price">
                                                    <span class="new">$<?php echo $key[3] ?></span>
                                                    
                                                </div>
                                            </div>
                                            <div class="del-icon">
                                                <a href="delete_ve_index.php?id_cart=<?php
                                                 echo $key[0]
                                                  ?>"><i class="far fa-trash-alt"></i></a>
                                            </div>
                                        </li>
                                        <?php    
                                     }?>
                                        <li>
                                            <div class="checkout-link">
                                                <a href="cart.php">Shopping Cart</a>
                                                <a class="black-color" href="cart.php">Checkout</a>
                                            </div>
                                        </li>
                                    </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="main-header menu-area black-bg">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav show">
                            <div class="logo d-block d-lg-none">
                                <a href="index.html" class="main-logo"><img src="public/layout/img/logo/w_logo.png" alt="Logo"></a>
                                <a href="index.html" class="sticky-logo"><img src="public/layout/img/logo/logo.png" alt="Logo"></a>
                            </div>
                            <div class="navbar-wrap main-menu d-none d-lg-flex">
                                <ul class="navigation">
                                    <li class="active menu-item-has-children has--mega--menu"><a href="index.php">Home</a>
                                    </li>
                                    <?php
                                    require_once "controllers/c_cate.php";
                                    $category = c_cate::loadMenu();
                                    ?>
                                    <li class="main-menu"><a href="shop.php">Shop</a>
                                        <ul class="submenu">
                                            <?php foreach ($category as $key => $value) { ?>
                                                <li><a href="cate.php?id=<?php echo $value->cate_id ?>"><?php echo $value->name ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li class="menu-item-has-children"><a href="#">blog</a>
                                        <ul class="submenu">
                                            <li><a href="blog.html">Our Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="header-action d-none d-md-block">
                                <ul>
                                    <li class="shipping-offer">Free Shipping on Orders <span>150.000VND</span></li>
                                    <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="flaticon-search-interface-symbol"></i></a></li>
                                    <li class="sidebar-toggle-btn"><a href="#" class="navSidebar-button"><img src="public/layout/img/icon/sidebar_toggle_icon.png" alt=""></a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="menu-backdrop"></div>
                    <!-- End Mobile Menu -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Search -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <input type="text" name="search" placeholder="Search here...">
                    <button name="btn-search"><i class="flaticon-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Search-end -->

    <!-- off-canvas-start -->
    <div class="sidebar-off-canvas info-group">
        <div class="off-canvas-overlay"></div>
        <div class="off-canvas-widget scroll">
            <div class="sidebar-widget-container">
                <div class="off-canvas-heading">
                    <a href="#" class="close-side-widget">
                        <span class="flaticon-targeting-cross"></span>
                    </a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo mb-30">
                                <a href="index.html"><img src="public/layout/img/logo/logo.png" alt=""></a>
                            </div>
                            <div class="content-box">
                                <p>WooCommerce and WordPress are both free, open source software reasons many ...
                                </p>
                            </div>
                            <div class="contact-info">
                                <h4 class="title">CONTACT US</h4>
                                <ul>
                                    <li><span class="flaticon-phone-call"></span><a href="tel:123456789">+9 325 444
                                            0000</a></li>
                                    <li><span class="flaticon-email"></span><a href="mailto:adara@info.com">adara@info.com</a></li>
                                    <li><span class="flaticon-place"></span>71 Park Lan Street 2355 NY</li>
                                </ul>
                            </div>
                            <div class="oc-newsletter">
                                <h4 class="title">NEWSLETTER</h4>
                                <p>Fill your email below to subscribe to my newsletter</p>
                                <form action="#">
                                    <input type="email" placeholder="Email...">
                                    <button class="btn">Subscribe</button>
                                </form>
                            </div>
                            <div class="oc-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div>
                            <div class="oc-bottom">
                                <div class="currency">
                                    <form action="#">
                                        <label>Currency</label>
                                        <select name="select">
                                            <option value="">USD</option>
                                            <option value="">AUE</option>
                                            <option value="">SAR</option>
                                            <option value="">INR</option>
                                            <option value="">BDT</option>
                                        </select>
                                    </form>
                                </div>
                                <div class="language">
                                    <form action="#">
                                        <label>Language</label>
                                        <select name="select">
                                            <option value="">English</option>
                                            <option value="">Spanish</option>
                                            <option value="">Turkish</option>
                                            <option value="">Russian</option>
                                            <option value="">Chinese</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>