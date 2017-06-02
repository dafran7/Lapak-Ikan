<!DOCTYPE html>
<html lang="en">

<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "User"){
   	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
  }
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
                            <li>Add New Listings</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Seller section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="index-seller.php"><i class="fa fa-list"></i> Statistik</a>
                                </li>
                                <li class="active">
                                    <a href="#"><i class="fa fa-shopping-cart"></i> Add New Listing</a>
                                </li>
                                <li>
                                    <a href="myorder.php"><i class="fa fa-user"></i> My Order</a>
                                </li>
                                <li>
                                    <a href="my-sales.php"><i class="fa fa-shopping-cart"></i> My Sales</a>
                                </li>
                                
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                    </div>

                    <!-- Main content -->


                    <div class="col-md-9">
                        <div class="box">
                            <h1>Tambah Item Baru</h1>
                            <hr /><br />
                            <form class="col-md-7 col-md-offset-2 form-horizontal" name="post" action="modules/post_item.php" method="POST" enctype="multipart/form-data">
                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Nama Item</label>
                                        <div class="col-sm-8">
                                            <input name="nama_item" type="text" class="form-control" id="item_name" placeholder="Item Name">
                                        </div>
                                    </div>
                                

                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Quantity</label>
                                        <div class="col-sm-8">
                                            <input name="quantity" type="number" min="0" class="form-control" id="quantity_item" placeholder="Quantity">
                                        </div>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Harga</label>
                                        <div class="col-sm-8">
                                            <input name="harga" type="number" min="0"  class="form-control" id="item_price" placeholder="Price">
                                        </div>
                                    </div>
                                

                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Berat</label>
                                        <div class="col-sm-8">
                                            <input name="berat" type="number" min="0"  class="form-control" id="item_weight" placeholder="Item Weights">
                                        </div>
                                    </div>
                                


                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Diskon</label>
                                        <div class="col-sm-8">
                                            <input name="diskon" type="number" min="0"  class="form-control" id="discount" placeholder="Discount">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Kategori</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="kategori">
                                                      <option value="" disabled selected>Choose your option</option>
                                                      <option value="hias">Ikan Hias</option>
                                                      <option value="konsumsi">Ikan Konsumsi</option>
                                                      <option value="aksesoris">Aksesoris Ikan</option>
                                                    </select>
                                        </div>
                                    </div>
                                



                                
                                   <div class="form-group">
                                        <label class="col-sm-4 control-label">Deskripsi</label>
                                        <div class="col-sm-8">
                                            <textarea name="deskripsi_item" name="deskripsi_item" class="form-control" rows="4" cols="50" id="deskripsi" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                               
                                <div class="form-group">
                                        <label class="col-sm-4 control-label">Upload Foto</label><br>
                                        <div class="col-sm-8">
                                            <input type="file" accept="image/jpeg" name="gambar_item" required/>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"> Add item</button>

                                    </div>

                            </form>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            
                            </div>
                            
                        </div>
                        
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