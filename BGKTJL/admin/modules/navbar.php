<!DOCTYPE html>
<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "Admin"){
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
	<title>Admin Page Lapak Ikan</title>

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
	      <a class="navbar-brand" href="#">Admin Page Lapak Ikan</a>
	    </div>
	    <div class="collapse navbar-collapse" id="nav-dropdown">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="index.php">Home</a></li>
	        <?php if($_SESSION['status'] == "Admin"){ ?><li><a href="seller.php">Pengajuan Seller</a></li><?php } ?>
	        <?php if($_SESSION['status'] == "Admin"){ ?><li><a href="confirm.php">Konfirmasi Pembayaran</a></li><?php } ?>
	        <?php if($_SESSION['status'] == "Admin"){ ?><li><a href="refundadm.php">Pengajuan Refund</a></li><?php } ?>
	        
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	          	<?php if($_SESSION['status'] == "User") echo $result['nama']; else echo 'Member Area'; ?>
	          <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	          	<?php if($_SESSION['status'] == "Admin") {?>
	            	
	            	<li><a href="modules/logout.php">Logout</a></li>
	            <?php } else { ?>
					<li><a href="login.php">Login</a></li>
	            <?php } ?>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
