<header id="htc__header" class="htc__header__area header--one">
    <!-- Start Mainmenu Area -->
    <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
        <div class="container">
            <div class="row">
                <div class="menumenu__container clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                        <div class="logo">
                            <a href="?act=home"><img src="images/logo-rb.png" alt="logo images" style="width: 105px;"></a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                        <nav class="main__menu__nav hidden-xs hidden-sm">
                            <ul class="main__menu">
                                <li class="drop"><a href="?act=home">Trang chủ</a></li>
                                <li class="drop"><a href="?act=shop">Cửa hàng</a>
                                    <!-- <ul class="dropdown mega_dropdown">
                
                                        <li><a class="mega__title" href="product-grid.html">Shop Pages</a>
                                            <ul class="mega__item">
                                                <li><a href="product-grid.html">Product Grid</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a class="mega__title" href="product-grid.html">Variable Product</a>
                                            <ul class="mega__item">
                                                <li><a href="#">Category</a></li>
                                                <li><a href="#">My Account</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a class="mega__title" href="product-grid.html">Product Types</a>
                                            <ul class="mega__item">
                                                <li><a href="#">Simple Product</a></li>
                                                <li><a href="#">Variable Product</a></li>
                                                <li><a href="#">Grouped Product</a></li>
                                                <li><a href="#">Downloadable Product</a></li>
                                                <li><a href="#">Simple Product</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <!-- <li class="drop"><a href="#">Product</a>
                                    <ul class="dropdown">
                                        <li><a href="product-grid.html">Product Grid</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                    </ul>
                                </li> -->
                                <li class="drop"><a href="blog.html">Bài viết</a>
                                    <!-- <ul class="dropdown">
                                        <li><a href="blog.html">Blog Grid</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul> -->
                                </li>
                                <!-- <li class="drop"><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                        <li><a href="cart.html">Cart page</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="product-grid.html">product grid</a></li>
                                        <li><a href="product-details.html">product details</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="contact.html">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    
                    <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                        <div class="header__right">
                            <div class="header__search search search__open">
                                <a href="#"><i class="icon-magnifier icons"></i></a>
                        </div>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="margin: 0px 10px;">Tài khoản</button>
                            <ul class="dropdown-menu">
                            <?php if (isset($_SESSION['login']['username'])) : ?>
                            <li>
                                <a href="?act=profile">
                                    <i class="icon-user icons"><?php echo $_SESSION['login']['username']; ?></i>
                                </a>
                                <a href="?act=logoutUser" height="auto">Đăng Xuất</a>
                                </li>   
                            <?php else : ?>
                            <li><a href="?act=login">Đăng Nhập</a></li>
                            <?php endif; ?>
                            </ul>
                        </div>
                            <div class="htc__shopping__cart">
                                <a class="" href="?act=viewcart"><i class="icon-handbag icons"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-area"></div>
        </div>
    </div>
    <!-- End Mainmenu Area -->
</header>

<div class="body__overlay"></div>
<!-- Start mini cart -->
<div class="offset__wrapper">
    <!-- Start Search Popap -->
    <div class="search__area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search__inner">
                        <form action="?act=shop" method="GET">
                            <input placeholder="Search here... " type="text" name="keyword">
                            <button type="submit" name="search"></button>
                        </form>
                        <div class="search__close__btn">
                            <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Popap -->
    <!-- Start Cart Panel -->

    <!-- <div class="shopping__cart">
        <div class="shopping__cart__inner">
            <div class="offsetmenu__close__btn">
                <a href="#"><i class="zmdi zmdi-close"></i></a>
            </div>
            <div class="shp__cart__wrap">
                <div class="shp__single__product">
                    <div class="shp__pro__thumb">
                        <a href="#">
                            <img src="images/product-2/sm-smg/1.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="shp__pro__details">
                        <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                        <span class="quantity">QTY: 1</span>
                        <span class="shp__price">$105.00</span>
                    </div>
                    <div class="remove__btn">
                        <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                    </div>
                </div>
                <div class="shp__single__product">
                    <div class="shp__pro__thumb">
                        <a href="#">
                            <img src="images/product-2/sm-smg/2.jpg" alt="product images">
                        </a>
                    </div>
                    <div class="shp__pro__details">
                        <h2><a href="product-details.html">Brone Candle</a></h2>
                        <span class="quantity">QTY: 1</span>
                        <span class="shp__price">$25.00</span>
                    </div>
                    <div class="remove__btn">
                        <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                    </div>
                </div>
            </div>
            <ul class="shoping__total">
                <li class="subtotal">Subtotal:</li>
                <li class="total__price">$130.00</li>
            </ul>
            <ul class="shopping__btn">
                <li><a href="?act=viewcart">Xem giỏ hàng</a></li>
                <li class="shp__checkout"><a href="?act=checkout">Thanh toán</a></li>
            </ul>
        </div>
    </div> -->

    <!-- End Cart Panel -->
</div>
<!-- End mini cart -->

<!-- Start Slider Area -->