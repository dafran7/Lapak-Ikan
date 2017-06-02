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

<?php include 'template/meta.php' ?>

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
                          <li>Search Results</li>
                    </ul>

            <div class="box">
                <?php if(!isset($_SESSION["search_products"])){
                    echo '<h2>All Items</h2>';
                } else {
                    echo '<h2>Results  | '.$_SESSION["search"].'</h2>';
                }
                ?>
            </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>12</strong> of <strong>25</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
                <div class="col-md-3 col-sm-4">
                    <div class="item">
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
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.product -->
                    </div>
                </div>

            <?php }
            unset($_SESSION["search_products"]);
        }

        else{
            while(($data = mysqli_fetch_array($query_item))&&$count++<6)
            {
                ?>
                    <div class="col-md-3 col-sm-4">
                        <div class="item">
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
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
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