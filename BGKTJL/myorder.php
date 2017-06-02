<!DOCTYPE html>

<?php
	include "modules/connect.php";
	if($_SESSION['status'] == "User"){
		$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
	$id_usr = $result['id_user'];
	$qry_item = mysqli_query($conn, "SELECT * FROM orderbiji WHERE id_seller='$id'");

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
                        <li><a href="#">Home</a>
                        </li>
                        <li>My orders</li>
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
                                        <a href="add-list.php"><i class="fa fa-shopping-cart"></i> Add New Listing</a>
                                    </li>
                                    <li class="active">
                                        <a href=#><i class="fa fa-user"></i> My Order</a>
                                    </li>
                                    <li>
                                        <a href="my-sales.php"><i class="fa fa-shopping-cart"></i> My Sales</a>
                                    </li>
                                    
                            </div>

                        </div>
                        <!-- /.col-md-3 -->

                        <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9" id="customer-orders">
                    <div class="box">
                        <h1>My orders</h1>

                        <p class="lead">Your orders on one place.</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <div class="table-responsive">
                            <table class="table table-hover">
                            <tr>
                                <th>Order ID</th>
                                <th>Item ID</th>
                                <th>Quantity</th>
                                <th>Waktu</th>
                                <th>ID_Pembeli</th>
                                <th>Nama Pembeli</th>
                                <th colspan="2">Alamat Pembeli</th>
                                <th colspan="2">Status Process</th>
                            </tr>
                            <?php
	$count = 1;
	while($items = mysqli_fetch_array($qry_item)){
        $meong=$items['id_user'];
        $myquery = "SELECT * FROM user WHERE id_user ='$meong' ";
        $hasil = mysqli_query($conn,$myquery);
        
        $data  = mysqli_fetch_array($hasil);

		echo
		'<tr>
            <td>'.$items['order_id'].'</td>
            <td>'.$items['item_id'].'</td>
			<td>'.$items['quantity'].'</td>
			<td>'.$items['waktu'].'</td>
			<td>'.$meong.'</td>
			<td>'.$data['nama'].'</td>
			<td colspan=2>'.$data['alamat'].'</td>';
        
            if($items['status']==0){ echo '<td class="approval">
                          			    <form action="modules/processorder.php?id='.$items['item_id'].'" method="post">
                          			        <input type="hidden" name="approval" value="1">
                                            <input type="hidden" name="order" value='.$items['order_id'].'>
                          			        <input type="submit" class="btn btn-primary" name="submit" value="Telah Diproses">
                          			    </form>
                          			</td>' ;}
            else { echo '<td class="approval">
                          			    Barang sudah diproses  
                          			</td></tr>';}
		
	}
?>
                        </table>
                        </div>
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
