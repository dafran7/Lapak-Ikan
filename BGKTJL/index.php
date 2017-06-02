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
