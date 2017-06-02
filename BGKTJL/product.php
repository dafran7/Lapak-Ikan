<!DOCTYPE html>

<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "User"){
   	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
  }

  $id_item = $_GET['id'];
  $que_item = mysqli_query($conn, "SELECT * FROM item WHERE item_id = '$id_item'");
	$item = mysqli_fetch_array($que_item);
  $viewer = $item['pengunjung'];
  $viewer++;
  $que_visit =  mysqli_query($conn, "UPDATE item SET pengunjung = '$viewer' WHERE item_id = '$id_item'");
  $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    $kategori = $item['kategori'];
  if($_SESSION['status'] == "User"){
   	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
  }
  if($kategori == "allcategory") {
      $query_item = mysqli_query($conn, "SELECT * FROM item ORDER BY fresh DESC");
  }
  else {
      $query_item = mysqli_query($conn, "SELECT * FROM item WHERE kategori = '$kategori' ORDER BY fresh DESC");
  }
?>

<html lang="en">

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
                        
                        <li><?php echo $item['nama_item']?></li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Kategori</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li <?php if($kategori=="allcategory") {?> class="active" <?php } ?>>
                                    <a href="category.php?kategori=allcategory">Semua Kategori </a>
                                </li >
                                <li<?php if($kategori=="konsumsi") {?> class="active" <?php } ?>>
                                    <a href="category.php?kategori=konsumsi">Ikan Konsumsi </a>
                                </li>
                                <li <?php if($kategori=="hias") {?> class="active" <?php } ?>>
                                    <a href="category.php?kategori=hias">Ikan Hias </a>
                                </li>
                                <li <?php if($kategori=="aksesoris") {?> class="active" <?php } ?>>
                                    <a href="category.php?kategori=aksesoris">Aksesoris </a>
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
                  <div class="box">
                    <div class="row" id="productMain">
                        <div class="col-sm-6">
                            <div>
                                <img src="images/<?php echo $item['gambar_item']?>" alt=<?php echo $item['nama_item']?> class="img-responsive">
                            </div>
                    </div>

                        <form method="post" action="cart_update.php">
                            <input type="hidden" name="item_id" value=" <?php echo $id_item?>" />
                            <input type="hidden" name="type" value="add" />
                            <input type="hidden" name="return_url" value="<?php echo $current_url ?>" />
                            <input type="hidden" maxlength="2" name="product_qty" value="1" required/>
                        <div class="col-sm-6">
                                <h1 class="text-center"><?php echo $item['nama_item']?></h1>
                                <p class="goToDescription"><a href="#details" class="scroll-to">Scroll to product details</a>
                                </p>
                                <p class="price">Rp.<?php echo $item['harga']?></p>

                                <p class="text-center buttons">

                                    <button type="submit" class="btn btn-primary" ><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                </p>


                            </div>
                        </form>

                        </div>

                    </div>


                    <div class="box" id="details">
                        <p>
                            <h4>Product details</h4>
                            <p><?php echo nl2br($item['deskripsi_item']);?></p>

                           
                        </div>

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
