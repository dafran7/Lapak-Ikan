<!DOCTYPE html>

<?php
  include "modules/connect.php";
	if($_SESSION['status'] == "User"){
		$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
	$id_usr = $result['id_user'];
}
  $id_item = $_GET['id'];
  $query_item = mysqli_query($conn, "SELECT * FROM item WHERE item_id = '$id_item'");
  $result_item = mysqli_fetch_array($query_item);
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
                            <li><a href="index.html">Home</a>
                            </li>
                            <li>Edit Listing</li>
                        </ul>

                    </div>

                    <div class="col-md-3">
                        <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Seller Section</h3>
                            </div>

                            <div class="panel-body">

                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="index-seller.php"><i class="fa fa-list"></i> Statistik</a>
                                    </li>
                                    <li>
                                        <a href="customer-wishlist.php"><i class="fa fa-shopping-cart"></i> Add New Listing</a>
                                    </li>
                                    <li>
                                        <a href="myorder.php"><i class="fa fa-user"></i> My Order</a>
                                    </li>
                                    <li class="active">
                                        <a href="my-sales.php"><i class="fa fa-shopping-cart"></i> My Sales</a>
                                    </li>
                                    <li>
                                        <a href="index.html"><i class="fa fa-sign-out"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!-- /.col-md-3 -->

                        <!-- *** CUSTOMER MENU END *** -->
                    </div>

                    <div class="col-md-9" id="wishlist">

                        <ul class="breadcrumb">
                            <li><a href="#">Home</a>
                            </li>
                            <li>Ladies</li>
                        </ul>

                        <div class="box">
                            <h1>Edit Item</h1>
                            <!--<p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    -->
                            <div style="width: 80%; margin: auto;">
                                <form class="col-md-7 col-md-offset-2 form-horizontal" name="post" action="modules/editprocess.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Nama Item</label>
                                        <div class="col-sm-8">
                                            <input name="nama_item" type="text" class="form-control" value="<?php echo $result_item['nama_item'];?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Quantity</label>
                                        <div class="col-sm-8">
                                            <input name="quantity" type="text" class="form-control" value="<?php echo $result_item['quantity'];?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Harga</label>
                                        <div class="col-sm-8">
                                            <input name="harga" type="text" class="form-control" value="<?php echo $result_item['harga'];?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Berat</label>
                                        <div class="col-sm-8">
                                            <input name="berat" type="text" class="form-control" value="<?php echo $result_item['berat'];?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Diskon</label>
                                        <div class="col-sm-8">
                                            <input name="diskon" type="text" class="form-control" value="<?php echo $result_item['diskon'];?>">
                                            <input name="item_id" type="text" value="<?php echo $id_item;?>" hidden>
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
                                            <textarea name="deskripsi_item" class="form-control" rows="4" cols="50"><?php echo $result_item['deskripsi_item'];?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Upload Foto</label><br>
                                        <div class="col-sm-8">
                                            <input type="file" accept="image/jpeg" name="gambar_item" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="text-center" style="margin-auto">
                                            <br><button type="submit" class="btn btn-primary">Post Item</button>
                                        </div>
                                    </div>
                                </form>
                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            </div>
                        </div>


                        <!-- /.products -->

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