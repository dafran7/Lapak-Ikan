<!DOCTYPE html>
<html lang="en">
<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "User"){
   	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
  }
  $query_item = mysqli_query($conn, "SELECT * FROM orderbiji WHERE id_user= '$id'");
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
                            <li><a href="index.php">Home</a>
                            </li>
                            <li>My Orders</li>
                        </ul>

                    </div>

                    <div class="col-md-3">
                        <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                        <div class="panel panel-default sidebar-menu">

                            <div class="panel-heading">
                                <h3 class="panel-title">Customer section</h3>
                            </div>

                            <div class="panel-body">

                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active">
                                        <a href=#><i class="fa fa-list"></i> My orders</a>
                                    </li>
                                    <li>
                                        <a href="customer-account.php"><i class="fa fa-heart"></i> My account</a>
                                    </li>
                                    <?php if(!($result['jenis']==1)){ ?>
                                    <li>
                                        <a href="become-seller.php"><i class="fa fa-user"></i> Become a seller</a>
                                    </li>
                                    <?php
                                             }
                 ?>
                                </ul>
                            </div>

                        </div>
                        <!-- /.col-md-3 -->

                        <!-- *** CUSTOMER MENU END *** -->
                    </div>

                    <div class=col-md-9>
                        <div class="box">
                            <h1>Pesanan Saya</h1>
                            <!--<p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    -->
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Thumbnail</th>
                                        <th>No</th>
                                        <th>Nama Item</th>
                                        <th>Harga</th>
                                        <th>Order ID</th>
                                        <th>Alamat</th>
                                        <th>Quantity</th>
                                        <th>Konfirmasi Pembayaran</th>
                                        <th>Status Process</th>
                                    </tr>
                                    <?php
                          	$count = 1;
                          	while($items = mysqli_fetch_array($query_item)){
                                $idit = $items['item_id'];
                                $qry_item = mysqli_query($conn, "SELECT * FROM item WHERE item_id='$idit' ");
                                $data = mysqli_fetch_array($qry_item);
                                $orid = $items['order_id'];
                                $qry_order = mysqli_query($conn, "SELECT * FROM orderdata WHERE order_id='$orid' ");
                                $order = mysqli_fetch_array($qry_order);
                          		echo
                          		'<tr>
                                <td><a target="_blank" href="images/'.$data['gambar_item'].'">
                            <img src="images/'.$data['gambar_item'].'" alt='.$data['nama_item'].' height="50" width="50">
                          </a></td>
                          			<td>'.$count++.'</td>
                          			<td>'.$data['nama_item'].'</td>
                          			<td>'.$items['harga'].'</td>
                                    <td>'.$items['order_id'].'</td>
                          			<td>'.$items['alamat'].'</td>
                          			<td>'.$items['quantity'].'</td>';
                          			
                                if($order['pembayaran']==0){ echo '<td class="approval">
                                                            <form action="konfirmasi.php?id='.$order['order_id'].'" method="post">
                                                                
                                                                <input type="submit" class="btn btn-primary" name="submit" value="Konfirmasi Pembayaran">
                                                            </form>
                                                        </td>' ;}
                                else if($order['pembayaran']==1 && $items['status']==1){ echo '<td class="approval">
                                                            <form action="modules/konfirmasipenerimaan.php?id='.$items['item_id'].'" method="post">
                                                                <input type="hidden" name="approval" value="3">
                                                                <input type="submit" class="btn btn-primary" name="submit" value="Konfirmasi Penerimaan">
                                                            </form>
                                                        </td>' ;}
                                else if($order['pembayaran']==1 && $items['status']==3){ echo '<td class="approval">
                                                            Barang sudah diterima 
                                                        </td>';}
                                else { echo '<td class="approval">
                                                            Barang sudah dibayar
                                                        </td>';}
                                if($items['status']==0 && $order['pembayaran']==0){ echo '<td class="approval">
                          			    Menunggu Pembayaran
                          			</td>' ;}
                                else if ($items['status']==2)
                                    { echo '<td class="approval">
                          			    Barang Kosong,Hubungi Admin
                          			</td>' ;}
                                else if ($items['status']==0)
                                    { echo '<td class="approval">
                          			    Sedang Diproses
                          			</td>' ;}
                                else { echo '<td class="approval">
                          			    Barang Sudah Dikirim 
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