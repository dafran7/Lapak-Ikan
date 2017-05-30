<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "User"){
   	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
  }
  $query_item = mysqli_query($conn, "SELECT * FROM item");
  $query_item_fresh = mysqli_query($conn, "SELECT * FROM item
  WHERE kategori = 'konsumsi' and TIMESTAMPDIFF(DAY,fresh,NOW()) < 1 ORDER BY fresh DESC") ;
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



            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->

            <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->

            <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->
 <div id="hot">

     <div class="box">
         <div class="container">
             <div class="col-md-12">
                 <h2>TODAY'S BEST DEALS</h2>
             </div>
         </div>
     </div>

     <div class="container">
         <div class="product-slider">
<?php
            while($data = mysqli_fetch_array($query_item))
             {
?>
               <div class="item">
                 <div class="product">
                     <div class="flip-container">
                         <div class="flipper">
                             <div class="front">
                                 <a href="product.php?id=<?php echo $data['item_id'] ?>">
                                     <img src="images/<?php echo $data['gambar_item'] ?>" alt="" width="175" height="120"/>
                                 </a>
                             </div>
                             <div class="back">
                                 <a href="product.php?id=<?php echo $data['item_id'] ?>">
                                      <img src="images/<?php echo $data['gambar_item'] ?>" alt="" width="175" height="120"/>
                                 </a>
                             </div>
                         </div>
                     </div>
                     <a href="detail.html" class="invisible">
                         <img src="images/<?php echo $data['gambar_item'] ?>" alt="" width="175" height="120"/>
                     </a>
                     <div class="text">
                         <h3><a href="product.php?id=<?php echo $data['item_id'] ?>"><?php echo $data['nama_item'] ?></a></h3>
                         <p class="price">Rp. <?php echo $data['harga'] ?></p>
                     </div>
                     <!-- /.text -->
                 </div>
                 <!-- /.product -->
             </div>
<?php
}
?>

             <!-- /.col-md-4 -->

         </div>
         <!-- /.product-slider -->
     </div>
     <!-- /.container -->

 </div>

<div id="hot">

     <div class="box">
         <div class="container">
             <div class="col-md-12">
                 <h2>FRESHEST FISH OF THE DAY</h2>
             </div>
         </div>
     </div>

     <div class="container">
         <div class="product-slider">
           <?php
                       while($item_fresh = mysqli_fetch_array($query_item_fresh))
                        {
           ?>
                          <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="product.php?id=<?php echo $item_fresh['item_id'] ?>">
                                                <img src="images/<?php echo $item_fresh['gambar_item'] ?>" alt="" width="175" height="120"/>
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="product.php?id=<?php echo $item_fresh['item_id'] ?>">
                                                 <img src="images/<?php echo $item_fresh['gambar_item'] ?>" alt="" width="175" height="120"/>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="detail.html" class="invisible">
                                    <img src="images/<?php echo $item_fresh['gambar_item'] ?>" alt="" width="175" height="120"/ >
                                </a>
                                <div class="text">
                                    <h3><a href="product.php?id=<?php echo $item_fresh['item_id'] ?>"><?php echo $item_fresh['nama_item'] ?></a></h3>
                                    <p class="price">Rp. <?php echo $item_fresh['harga'] ?></p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
           <?php
           }
           ?>
         </div>
         <!-- /.product-slider -->
     </div>
     <!-- /.container -->

 </div>

<div id="hot">

     <div class="box">
         <div class="container">
             <div class="col-md-12">
                 <h2>FEATURED ITEMS	</h2>
             </div>
         </div>
     </div>

     <div class="container">
         <div class="product-slider">
             <div class="item">
                 <div class="product">
                     <div class="flip-container">
                         <div class="flipper">
                             <div class="front">
                                 <a href="detail.html">
                                     <img src="img/product1.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                             <div class="back">
                                 <a href="detail.html">
                                     <img src="img/product1_2.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <a href="detail.html" class="invisible">
                         <img src="img/product1.jpg" alt="" class="img-responsive">
                     </a>
                     <div class="text">
                         <h3><a href="detail.html">Fur coat with very but very very long name</a></h3>
                         <p class="price">$143.00</p>
                     </div>
                     <!-- /.text -->
                 </div>
                 <!-- /.product -->
             </div>

             <div class="item">
                 <div class="product">
                     <div class="flip-container">
                         <div class="flipper">
                             <div class="front">
                                 <a href="detail.html">
                                     <img src="img/product2.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                             <div class="back">
                                 <a href="detail.html">
                                     <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <a href="detail.html" class="invisible">
                         <img src="img/product2.jpg" alt="" class="img-responsive">
                     </a>
                     <div class="text">
                         <h3><a href="detail.html">White Blouse Armani</a></h3>
                         <p class="price"><del>$280</del> $143.00</p>
                     </div>
                     <!-- /.text -->

                     <div class="ribbon sale">
                         <div class="theribbon">SALE</div>
                         <div class="ribbon-background"></div>
                     </div>
                     <!-- /.ribbon -->

                     <div class="ribbon new">
                         <div class="theribbon">NEW</div>
                         <div class="ribbon-background"></div>
                     </div>
                     <!-- /.ribbon -->

                     <div class="ribbon gift">
                         <div class="theribbon">GIFT</div>
                         <div class="ribbon-background"></div>
                     </div>
                     <!-- /.ribbon -->
                 </div>
                 <!-- /.product -->
             </div>

             <div class="item">
                 <div class="product">
                     <div class="flip-container">
                         <div class="flipper">
                             <div class="front">
                                 <a href="detail.html">
                                     <img src="img/product3.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                             <div class="back">
                                 <a href="detail.html">
                                     <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <a href="detail.html" class="invisible">
                         <img src="img/product3.jpg" alt="" class="img-responsive">
                     </a>
                     <div class="text">
                         <h3><a href="detail.html">Black Blouse Versace</a></h3>
                         <p class="price">$143.00</p>
                     </div>
                     <!-- /.text -->
                 </div>
                 <!-- /.product -->
             </div>

             <div class="item">
                 <div class="product">
                     <div class="flip-container">
                         <div class="flipper">
                             <div class="front">
                                 <a href="detail.html">
                                     <img src="img/product3.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                             <div class="back">
                                 <a href="detail.html">
                                     <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <a href="detail.html" class="invisible">
                         <img src="img/product3.jpg" alt="" class="img-responsive">
                     </a>
                     <div class="text">
                         <h3><a href="detail.html">Black Blouse Versace</a></h3>
                         <p class="price">$143.00</p>
                     </div>
                     <!-- /.text -->
                 </div>
                 <!-- /.product -->
             </div>

             <div class="item">
                 <div class="product">
                     <div class="flip-container">
                         <div class="flipper">
                             <div class="front">
                                 <a href="detail.html">
                                     <img src="img/product2.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                             <div class="back">
                                 <a href="detail.html">
                                     <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <a href="detail.html" class="invisible">
                         <img src="img/product2.jpg" alt="" class="img-responsive">
                     </a>
                     <div class="text">
                         <h3><a href="detail.html">White Blouse Versace</a></h3>
                         <p class="price">$143.00</p>
                     </div>
                     <!-- /.text -->

                     <div class="ribbon new">
                         <div class="theribbon">NEW</div>
                         <div class="ribbon-background"></div>
                     </div>
                     <!-- /.ribbon -->
                 </div>
                 <!-- /.product -->
             </div>

             <div class="item">
                 <div class="product">
                     <div class="flip-container">
                         <div class="flipper">
                             <div class="front">
                                 <a href="detail.html">
                                     <img src="img/product1.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                             <div class="back">
                                 <a href="detail.html">
                                     <img src="img/product1_2.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <a href="detail.html" class="invisible">
                         <img src="img/product1.jpg" alt="" class="img-responsive">
                     </a>
                     <div class="text">
                         <h3><a href="detail.html">Fur coat</a></h3>
                         <p class="price">$143.00</p>
                     </div>
                     <!-- /.text -->

                     <div class="ribbon gift">
                         <div class="theribbon">GIFT</div>
                         <div class="ribbon-background"></div>
                     </div>
                     <!-- /.ribbon -->

                 </div>
                 <!-- /.product -->
             </div>
             <!-- /.col-md-4 -->

             <div class="item">
                 <div class="product">
                     <div class="flip-container">
                         <div class="flipper">
                             <div class="front">
                                 <a href="detail.html">
                                     <img src="img/product2.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                             <div class="back">
                                 <a href="detail.html">
                                     <img src="img/product2_2.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <a href="detail.html" class="invisible">
                         <img src="img/product2.jpg" alt="" class="img-responsive">
                     </a>
                     <div class="text">
                         <h3><a href="detail.html">White Blouse Armani</a></h3>
                         <p class="price"><del>$280</del> $143.00</p>
                     </div>
                     <!-- /.text -->

                     <div class="ribbon sale">
                         <div class="theribbon">SALE</div>
                         <div class="ribbon-background"></div>
                     </div>
                     <!-- /.ribbon -->

                     <div class="ribbon new">
                         <div class="theribbon">NEW</div>
                         <div class="ribbon-background"></div>
                     </div>
                     <!-- /.ribbon -->

                     <div class="ribbon gift">
                         <div class="theribbon">GIFT</div>
                         <div class="ribbon-background"></div>
                     </div>
                     <!-- /.ribbon -->
                 </div>
                 <!-- /.product -->
             </div>

             <div class="item">
                 <div class="product">
                     <div class="flip-container">
                         <div class="flipper">
                             <div class="front">
                                 <a href="detail.html">
                                     <img src="img/product3.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                             <div class="back">
                                 <a href="detail.html">
                                     <img src="img/product3_2.jpg" alt="" class="img-responsive">
                                 </a>
                             </div>
                         </div>
                     </div>
                     <a href="detail.html" class="invisible">
                         <img src="img/product3.jpg" alt="" class="img-responsive">
                     </a>
                     <div class="text">
                         <h3><a href="detail.html">Black Blouse Versace</a></h3>
                         <p class="price">$143.00</p>
                     </div>
                     <!-- /.text -->
                 </div>
                 <!-- /.product -->
             </div>

         </div>
         <!-- /.product-slider -->
     </div>
     <!-- /.container -->

 </div>





<!-- /#hot -->

 <!-- *** HOT END *** -->

 <!-- *** GET INSPIRED *** -->
            <div class="container" data-animate="fadeInUpBig">
                <div class="col-md-12">
                    <div class="box slideshow">
                        <h3>Get Inspired</h3>
                        <p class="lead">Get the inspiration from our world class designers</p>
                        <div id="get-inspired" class="owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="img/getinspired1.jpg" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="img/getinspired2.jpg" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="img/getinspired3.jpg" alt="Get inspired" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- *** GET INSPIRED END *** -->

            <!-- *** BLOG HOMEPAGE ***
 _________________________________________________________ -->

            <div class="box text-center" data-animate="fadeInUp">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="text-uppercase">From our blog</h3>

                        <p class="lead">What's new in the world of fashion? <a href="blog.html">Check our blog!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="col-md-12" data-animate="fadeInUp">

                    <div id="blog-homepage" class="row">
                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="post.html">Fashion now</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">Fashion and style</a>
                                </p>
                                <hr>
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="post">
                                <h4><a href="post.html">Who is who - example blog post</a></h4>
                                <p class="author-category">By <a href="#">John Slim</a> in <a href="">About Minimal</a>
                                </p>
                                <hr>
                                <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                    ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                <p class="read-more"><a href="post.html" class="btn btn-primary">Continue reading</a>
                                </p>
                            </div>

                        </div>

                    </div>
                    <!-- /#blog-homepage -->
                </div>
            </div>
            <!-- /.container -->

            <!-- *** BLOG HOMEPAGE END *** -->


        </div>
        <!-- /#content -->

        <!-- *** FOOTER ***
<?php include 'template/footer.php' ?>

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2015 Your name goes here.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="http://bootstrapious.com/e-commerce-templates">Bootstrapious</a> with support from <a href="https://kakusei.cz">Kakusei</a>
                        <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) -->
                    </p>
                </div>
            </div>
        </div>
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
