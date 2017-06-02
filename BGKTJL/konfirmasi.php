<!DOCTYPE html>
<html lang="en">

<?php
    include "modules/connect.php";
	if($_SESSION['status'] == "User"){
		$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
	$id_usr = $result['id_user'];
}
  $id_order = $_GET['id'];
  $query_order = mysqli_query($conn, "SELECT * FROM orderdata WHERE order_id = '$id_order'");
  $result_order = mysqli_fetch_array($query_order);

    
   
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
                            <li><a href="index.php">Home</a>
                            </li>
                            <li>Konfirmasi Pembayaran</li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                     
                    </div>

                    <!-- Main content -->


                    <div class="col-md-12">
                        <div class="box">
                            <h2>Konfirmasi Pembayaran Order ID <?php echo $result_order['order_id'] ?></h2>
                            <hr /><br />
                            <form class="col-md-7 col-md-offset-2 form-horizontal" name="post" action="modules/konfirmasiprocess.php" method="POST" enctype="multipart/form-data">
                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Atas Nama Pengirim</label>
                                        <div class="col-sm-8">
                                            <input name="atasnama" type="text" class="form-control" id="atasnama" placeholder="Atas Nama" >
                                        </div>
                                    </div>
                                

                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Bank</label>
                                        <div class="col-sm-8">
                                            <input name="bank" type="text" class="form-control" id="bank" placeholder="Bank">
                                        </div>
                                    </div>
                                
                                
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Jumlah yang Dikirim</label>
                                        <div class="col-sm-8">
                                            <input name="jumlahyangdikirim" type="number" min="0" class="form-control" id="jumlahyangdikirim" placeholder="Jumlah yang Dikirim">
                                        </div>
                                    </div>
                                    
                                          <input type="hidden" name="order_id" value="<?php echo $result_order['order_id']?>" />
                                   
                                    
                                
                               
                                <div class="form-group">
                                        <label class="col-sm-4 control-label">Upload Foto Bukti</label><br>
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