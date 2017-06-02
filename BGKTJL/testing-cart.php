<!DOCTYPE html>
<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "User"){
   	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
  }
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

  $query_item = mysqli_query($conn, "SELECT * FROM item");
  //$tampil_item = mysqli_query($query_item);
?>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Obaju : e-commerce template
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



    </head>

    <body>

        <!-- *** TOPBAR ***
 _________________________________________________________ -->
    <?php include 'template/topbar.php' ?>
    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

   <?php include 'template/navbar.php' ?>
 <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Ladies</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <a href="category.html">Ikan Konsumsi <span class="badge pull-right">42</span></a>
                                </li>
                                <li class="active">
                                    <a href="category.html">Ikan Hias  <span class="badge pull-right">123</span></a>
                                </li>
                                <li>
                                    <a href="category.html">Aksesoris  <span class="badge pull-right">11</span></a>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <!-- *** MENUS AND FILTERS END *** -->


                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    
                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                               <center></center> Showing <strong>12</strong> of <strong>25</strong> products
                            </div>

                        </div>
                    </div>

                    <div class="row products">
 <?php
            $count=0;
            if (isset($_SESSION["search_products"]) && $_SESSION["search_products"]=='fail'){
                        echo '<h1 align="center">Fish Not Found!</h1>';
                    }
            elseif(isset($_SESSION["search_products"]) && count($_SESSION["search_products"])>0){
                    
                        foreach ($_SESSION["search_products"] as $get_item) {
                            if($count++==6) break;
                                 ?>
                             <div class="col-md-4 col-sm-6">
                                <form method="post" action="cart_update.php">

                                <input type="hidden" name="item_id" value=" <?php echo $get_item['item_id']?>" />
                                <input type="hidden" name="type" value="add" />
                                <input type="hidden" name="return_url" value="<?php echo $current_url ?>" />
                                <input type="hidden" size="2" maxlength="2" name="product_qty" value="1" />
                                    <div class="product">
                                        <div class="flip-container">
                                            <div class="flipper">
                                                <div class="front">
                                                    <a href="product.php?id=<?php echo $get_item['item_id'] ?>">
                                                        <img src="images/<?php echo $get_item['gambar_item'] ?>" alt="" class="img-responsive">
                                                    </a>
                                                </div>
                                                <div class="back">
                                                    <a href="product.php?id=<?php echo $get_item['item_id'] ?>">
                                                        <img src="images/<?php echo $get_item['gambar_item'] ?>" alt="" class="img-responsive">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="detail.html" class="invisible">
                                            <img src="images/<?php echo $get_item['gambar_item'] ?>" alt="" class="img-responsive">
                                        </a>
                                        <div class="text">
                                            <h3><a href="product.php?id=<?php echo $get_item['item_id'] ?>"><?php echo $get_item['nama_item'] ?></a></h3>
                                            <p class="price">Rp. <?php echo $get_item['harga'] ?></p>
                                            <p class="buttons">
                                                <a href="detail.html" class="btn btn-default">View detail</a>
                                                <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</button>

                                            </p>

                                        </div>
                                        <!-- /.text -->
                                    </div>
           </form>
                                </div>
                             
                    <?php }
                unset($_SESSION["search_products"]);
                        
                    }
                       
            else{
                    while(($data = mysqli_fetch_array($query_item))&&$count++<6)
                     {
?>
                        <div class="col-md-4 col-sm-6">
                        <form method="post" action="cart_update.php">
                        
                        <input type="hidden" name="item_id" value=" <?php echo $data['item_id']?>" />
                        <input type="hidden" name="type" value="add" />
                        <input type="hidden" name="return_url" value="<?php echo $current_url ?>" />
                        <input type="hidden" size="2" maxlength="2" name="product_qty" value="1" />
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="product.php?id=<?php echo $data['item_id'] ?>">
                                                <img src="images/<?php echo $data['gambar_item'] ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="product.php?id=<?php echo $data['item_id'] ?>">
                                                <img src="images/<?php echo $data['gambar_item'] ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="images/<?php echo $data['gambar_item'] ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="product.php?id=<?php echo $data['item_id'] ?>"><?php echo $data['nama_item'] ?></a></h3>
                                    <p class="price">Rp. <?php echo $data['harga'] ?></p>
                                    <p class="buttons">
                                        <a href="detail.html" class="btn btn-default">View detail</a>
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        
                                    </p>
                                                    
                                </div>
                                <!-- /.text -->
                            </div>
   </form>
                        </div>
                        <!-- /.col-md-4 -->
 <?php
                     }
            }
?>   
                    </div>
                    <!-- /.products -->


                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


                    <!-- *** FOOTER ***
        <?php include 'template/footer.php' ?>
            <!-- *** FOOTER END *** -->




            <!-- *** COPYRIGHT ***
_________________________________________________________ -->
            <?php include 'template/copyright.php' ?>
            <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap-hover-dropdown.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/front.js"></script>






</body>

</html>