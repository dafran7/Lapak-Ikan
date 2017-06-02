<div class="navbar navbar-default yamm" role="navigation" id="navbar">
    <div class="container">
        <div class="navbar-header">

            <a class="navbar-brand home" href="index.php" data-animate-hover="bounce">
                <img src="img/meong.png" alt="Lapak Ikan logo" class="hidden-xs">
                <img src="img/meong.png" alt="Lapak Ikan logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>
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
                                
                                    <div class="col-sm-3">
                                        <h5><a href="category.php?kategori=allcategory">All Categories</a></h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5><a href="category.php?kategori=konsumsi">Edible Fish</a></h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5><a href="category.php?kategori=hias">Decorative Fish</a></h5>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5><a href="category.php?kategori=aksesoris">Accessories</a></h5>
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
                <form class="navbar-form" method="post" action="modules/search_items.php">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search">
                    <?php
                        $current_url1 = $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                        if($current_url1!="http://localhost/BGKTJL/search.php"){
                        $current_url1="http://localhost/BGKTJL/search.php";
                        }
                            
                        urlencode($current_url1);
                        
                        echo '<input type="hidden" name="home" value="'.$current_url1.'" />';
                    ?>
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