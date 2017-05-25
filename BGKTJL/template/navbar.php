<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                <img src="img/logo.png" alt="Obaju logo" class="hidden-xs">
                <img src="img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
            </a>
            <div class="navbar-buttons">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                     <span class="sr-only">Toggle navigation</span>
                     <i class="fa fa-align-justify"></i>
                 </button>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                     <span class="sr-only">Toggle search</span>
                     <i class="fa fa-search"></i>
                 </button>
                <a class="btn btn-default navbar-toggle" href="basket.php">
                    <i class="fa fa-shopping-cart"></i> <span class="hidden-xs"><?php $counter= (count($_SESSION["cart_products"]));echo $counter;?> items in cart</span>
                </a>
            </div>
        </div>
        <!--/.navbar-header -->

        <div class="navbar-collapse collapse" id="navigation">

            <ul class="nav navbar-nav navbar-left">
                <li class="active"><a href="index.php">Home</a>
                </li>
                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>All Categories</h5>
                                        <ul>
                                            <li><a href="category.html">T-shirts</a>
                                            </li>
                                            <li><a href="category.html">Shirts</a>
                                            </li>
                                            <li><a href="category.html">Pants</a>
                                            </li>
                                            <li><a href="category.html">Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Edible Fish</h5>
                                        <ul>
                                            <li><a href="category.html">Ikan Mas</a>
                                            </li>
                                            <li><a href="category.html">Ikan Kakap</a>
                                            </li>
                                            <li><a href="category.html">Ikan Lele</a>
                                            </li>
                                            <li><a href="category.html">Ikan Gurame</a>
                                            </li>
                        </li>
                        <li><a href="category.html">Other</a>
                        </li>
                        </ul>
                        </div>
                        <div class="col-sm-3">
                            <h5>Accessories</h5>
                            <ul>
                                <li><a href="category.html">Fishing Kit</a>
                                </li>
                                <li><a href="category.html">Aquarium and Accessories</a>
                                </li>
                                <li><a href="category.html">Fish Food</a>
                                </li>
                                <li><a href="category.html">Casual</a>
                                </li>
                                <li><a href="category.html">Hiking shoes</a>
                                </li>
                                <li><a href="category.html">Casual</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h5>Decorative Fish</h5>
                            <ul>
                                <li><a href="category.html">Lion Fish</a>
                                </li>
                                <li><a href="category.html">Cupang</a>
                                </li>
                                <li><a href="category.html">Hiking shoes</a>
                                </li>
                            </ul>
                            <h5>Looks and trends</h5>
                            <ul>
                                <li><a href="category.html">Trainers</a>
                                </li>
                                <li><a href="category.html">Sandals</a>
                                </li>
                                <li><a href="category.html">Hiking shoes</a>
                                </li>
                            </ul>
                        </div>
                        </div>
                        </div>
                        <!-- /.yamm-content -->
                </li>
                </ul>
                </li>

                <li class="dropdown yamm-fw">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>Shop</h5>
                                        <ul>
                                            <li><a href="index.php">Homepage</a>
                                            </li>
                                            <li><a href="category.html">Category - sidebar left</a>
                                            </li>
                                            <li><a href="category-right.html">Category - sidebar right</a>
                                            </li>
                                            <li><a href="category-full.html">Category - full width</a>
                                            </li>
                                            <li><a href="detail.html">Product detail</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>User</h5>
                                        <ul>
                                            <li><a href="register.php">Register / login</a>
                                            </li>
                                            <li><a href="customer-orders.html">Orders history</a>
                                            </li>
                                            <li><a href="customer-order.html">Order history detail</a>
                                            </li>
                                            <li><a href="customer-wishlist.html">Wishlist</a>
                                            </li>
                                            <li><a href="customer-account.html">Customer account / change password</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Order process</h5>
                                        <ul>
                                            <li><a href="basket.html">Shopping cart</a>
                                            </li>
                                            <li><a href="checkout1.html">Checkout - step 1</a>
                                            </li>
                                            <li><a href="checkout2.html">Checkout - step 2</a>
                                            </li>
                                            <li><a href="checkout3.html">Checkout - step 3</a>
                                            </li>
                                            <li><a href="checkout4.html">Checkout - step 4</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Pages and blog</h5>
                                        <ul>
                                            <li><a href="blog.html">Blog listing</a>
                                            </li>
                                            <li><a href="post.html">Blog Post</a>
                                            </li>
                                            <li><a href="faq.html">FAQ</a>
                                            </li>
                                            <li><a href="text.html">Text page</a>
                                            </li>
                                            <li><a href="text-right.html">Text page - right sidebar</a>
                                            </li>
                                            <li><a href="404.html">404 page</a>
                                            </li>
                                            <li><a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->

        <div class="navbar-buttons">

            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"><?php 
                    if(!(isset($_SESSION["cart_products"]))){
                        echo "0";
                        
                    }
                     else{
                        echo (count($_SESSION['cart_products']));
                    }
                     ?> items in cart</span></a>
            </div>
            <!--/.nav-collapse -->

            <div class="navbar-collapse collapse right" id="search-not-mobile">
                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

   <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

     </span>
                    </div>
                </form>
            </div>

        </div>

        <div class="collapse clearfix" id="search">

            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">

   <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

     </span>
                </div>
            </form>

        </div>
        <!--/.nav-collapse -->

    </div>
    <!-- /.container -->
</div>
<!-- /#navbar -->