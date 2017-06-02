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
                                    <li>
                                        <a href="index.html"><i class="fa fa-sign-out"></i> Logout</a>
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
                            <h2>Request Refund</h2>
                            <hr /><br />
                            <form class="col-md-7 col-md-offset-2 form-horizontal" name="post" action="modules/refundprocess.php" method="POST" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Order ID</label>
                                    <div class="col-sm-8">
                                        <input name="order_id" type="text" class="form-control" id="alasan" placeholder="Contoh : 14045627">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Alasan Singkat Refund</label>
                                    <div class="col-sm-8">
                                        <input name="alasan" type="text" class="form-control" id="alasan" placeholder="Alasan Singkat">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Alamat Email</label>
                                    <div class="col-sm-8">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="nama@email.com">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Nomor Rekening</label>
                                    <div class="col-sm-8">
                                        <input name="norek" type="number" class="form-control" id="norek" placeholder="Nomor Rekening">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Nama Pemilik Rekening</label>
                                    <div class="col-sm-8">
                                        <input name="namarek" type="text" class="form-control" id="namarek" placeholder="Oskadon">
                                    </div>
                                </div>

                               
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Bank</label>
                                    <div class="col-sm-8">
                                        <input name="bank" type="text" class="form-control" id="bank" placeholder="Nama Bank">
                                    </div>
                                </div>

                                

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"> Request Refund</button>

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