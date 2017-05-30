<!DOCTYPE html>
<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "User"){
   	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
  }
?>
<html lang="en">
  <head>
  	<!-- Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Title -->
	<title>About | Agriweb</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
	
	<!-- Navbar -->
	<nav class="navbar navbar-inverse">
	  <div class="container container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-dropdown" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Admin Lapak Ikan</a>
	    </div>
	    <div class="collapse navbar-collapse" id="nav-dropdown">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="index.php">Home</a></li>
	        <li><a href="seller.php">Pengajuan Seller</a></li>
              <li><a href="#">Konfirmasi Pembayaran</a></li>
	        <li><a href="contact.php">Contact</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	     <?php if($_SESSION['status'] == "User") echo $result['nama']; else echo 'Member Area'; ?>
	          <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	          	<?php if($_SESSION['status'] == "User") {?>
	            	<li><a href="profile.php">Profile</a></li>
	            	<li><a href="modules/logout.php">Logout</a></li>
	            <?php } else { ?>
					<li><a href="login.php">Login</a></li>
	            	<li><a href="register.php">Register</a></li>
	            <?php } ?>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!-- Content -->
	<div class="container" style="text-align: center">
	 <?php if($_SESSION['status'] == "User") { ?> <center>
		<h1>Daftar Konfirmasi Pembayaran</h1><br><br>
	</center>
	<div style="width: 80%; margin: auto;">
	<table class="table centered">
	
	<tr>
		<th>No</th>
		
		<th><center>Order Id</center></th>
		<th><center>Atas Nama</center></th>
		<th><center>Bank</center></th>
		<th><center>Jumlah Pembayaran</center></th>
		<th><center>Bukti Pembayaran</center></th>
        <th colspan="2"><center>Konfirmasi</center></th>
	</tr>
<?php
	$count = 1;
    $querybuyyer = mysqli_query($conn, "SELECT * FROM pembayaran");
	while($result1 = mysqli_fetch_array($querybuyyer)){
		echo
		'<tr>
			<td>'.$count++.'</td>
			
			<td>'.$result1['order_id'].'</td>
			<td>'.$result1['atasnama'].'</td>
			<td>'.$result1['bank'].'</td>
            <td>'.$result1['banyak'].'</td>
            <td><a href="../images/bukti_pembayaran/'.$result1['gambar'].'">Bukti Pembayaran</a></td>
			<td class="approval">
                          			    <form action="modules/confirmationprocess.php?id='.$result1['order_id'].'" method="post">
                          			        <input type="hidden" name="approval" value="1">
                          			        <input type="submit" class="btn btn-primary" name="submit" value="Yes">
                          			    </form>
                          			</td>
			<td class="contact-delete">
                          			    <form action="modules/confirmationprocess.php?id='.$result1['order_id'].'" method="post">
                          			        <input type="hidden" name="approval" value="2">
                          			        <input type="submit" class="btn btn-danger" name="submit" value="Delete">
                          			    </form>
                          			</td>
		</tr>';
	}
?>
        <?php } ?>
	</table>
	</div>
	</div>
	
	<!-- JavaScript -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>