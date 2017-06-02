<?php
  include "modules/connect.php";
  $kategori = $_GET['kategori'];
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
  }//$tampil_item = mysqli_query($query_item);
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'template/meta.php' ?>

<body>
    <?php include 'template/topbar.php' ?>

    <?php include 'template/navbar.php' ?>

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a>
                        </li>
                        <li>
                            <?php
                                if($kategori=="allcategory")
                                    echo "Semua Kategori";
                                else if($kategori=="konsumsi")
                                    echo "Konsumsi";
                                else if($kategori=="hias")
                                    echo "Hias";
                                else
                                    echo "Aksesoris";
                            ?>
                        </li>
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

                    
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>
                            <?php
                                if($kategori=="allcategory")
                                    echo "Semua Kategori";
                                else if($kategori=="konsumsi")
                                    echo "Ikan Konsumsi";
                                else if($kategori=="hias")
                                    echo "Ikan Hias";
                                else
                                    echo "Aksesoris";
                            ?>
                        </h1>
                        <p>Menampilkan semua 
                            <?php
                                if($kategori=="allcategory")
                                    echo "Semua Kategori";
                                else if($kategori=="konsumsi")
                                    echo "Ikan Konsumsi";
                                else if($kategori=="hias")
                                    echo "Ikan Hias";
                                else
                                    echo "Aksesoris";
                            ?>
                            .</p>
                    </div>

                    <div class="row products">

<?php
                     $count = 8;
                     while(($data = mysqli_fetch_array($query_item)) && $count != 0)
                     {
?>
                     <div class="col-md-3 col-sm-4">
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
                    </div>
<?php
                    $count = $count - 1;
                    }
?>
                    </div>
                    <!-- /.products -->


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