<!DOCTYPE html>

<?php
	include "modules/connect.php";
	if($_SESSION['status'] == "User"){
		$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
	$id_usr = $result['id_user'];
	$qry_item = mysqli_query($conn, "SELECT * FROM item WHERE id_user='$id'");

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
                        <li><a href="index.html">Home</a>
                        </li>
                        <li>My Sales</li>
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
                                    <a href="add-list.php"h><i class="fa fa-shopping-cart"></i> Add New Listing</a>
                                </li>
                                <li>
                                    <a href="myorder.php"><i class="fa fa-user"></i> My Order</a>
                                </li>
                                <li class="active">
                                    <a href="my-sales.php"><i class="fa fa-shopping-cart"></i> My Sales</a>
                                </li>
                                
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9" id="wishlist">

                   

                    <div class="box">
                        <h1>My Sales</h1>
                        <!--<p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    -->
                        <div style="width: 80%; margin: auto;">
                          <table class="table centered">
                          <tr>
                            <th>Thumbnail</th>
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>Harga</th>
                            <th>Kategori</th>
                            <th>Deskripsi Item</th>
                            <th>Quantity</th>
                            <th colspan="2">Menu</th>
                          </tr>
                          <?php
                          	$count = 1;
                          	while($items = mysqli_fetch_array($qry_item)){
                          		echo
                          		'<tr>
                                <td><a target="_blank" href="images/'.$items['gambar_item'].'">
                            <img src="images/'.$items['gambar_item'].'" alt='.$items['nama_item'].' height="50" width="50">
                          </a></td>
                          			<td>'.$count++.'</td>
                          			<td>'.$items['nama_item'].'</td>
                          			<td>'.$items['harga'].'</td>
                                    <td>'.$items['kategori'].'</td>
                          			<td>';echo nl2br($items['deskripsi_item']);echo'</td>
                          			<td>'.$items['quantity'].'</td>
                          			<td><a href="edit-selling.php?id='.$items['item_id'].'"><button type="button" class="btn btn-primary">Edit</button></td>
                          			<td class="contact-delete">
                          			    <form action="modules/delete.php?id='.$items['item_id'].'" method="post">
                          			        <input type="hidden" name="item_id" value="'.$items['item_id'].'">
                          			        <input type="submit" class="btn btn-danger" name="submit" value="Delete">
                          			    </form>
                          			</td>
                          		</tr>';
                          	}
                          ?>
                          	</table>
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
