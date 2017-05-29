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
	      <a class="navbar-brand" href="#">Agriweb</a>
	    </div>
	    <div class="collapse navbar-collapse" id="nav-dropdown">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="index.php">Home</a></li>
	        <li><a href="#">Pengajuan Seller</a></li>
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
	  <center>
		<h1>Daftar Pengajuan Seller</h1><br><br>
	</center>
	<div style="width: 80%; margin: auto;">
	<table class="table centered">
	<tr>
		<th>No</th>
		
		<th>ID User</th>
		<th>Nama Toko</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Kota</th>
		<th>Kode Pos</th>
		<th>No. Telp</th>
		<th>Data Foto</th>
		<th colspan="2">Approval</th>
	</tr>
<?php
	$count = 1;
    $queryseller = mysqli_query($conn, "SELECT * FROM seller WHERE id_user = '$id' and approval!='2'");
	while($result1 = mysqli_fetch_array($queryseller)){
		echo
		'<tr>
			<td>'.$count++.'</td>
			
			<td>'.$result1['id_user'].'</td>
			<td>'.$result1['bs_name'].'</td>
			<td>'.$result1['bs_address'].'</td>
            <td>'.$result1['email'].'</td>
            <td>'.$result1['cty_state'].'</td>
            <td>'.$result1['ZIP'].'</td>
            <td>'.$result1['notelp'].'</td>
            <td>'.$result1['upload_files'].'</td>
			<td class="approval">
                          			    <form action="modules/approvalprocess.php?id='.$result1['id_user'].'" method="post">
                          			        <input type="hidden" name="approval" value="1">
                          			        <input type="submit" class="btn btn-primary" name="submit" value="Yes">
                          			    </form>
                          			</td>
			<td class="contact-delete">
                          			    <form action="modules/approvalprocess.php?id='.$result1['id_user'].'" method="post">
                          			        <input type="hidden" name="approval" value="2">
                          			        <input type="submit" class="btn btn-danger" name="submit" value="Delete">
                          			    </form>
                          			</td>
		</tr>';
	}
?>
	</table>
	</div>
	</div>
	
	<!-- JavaScript -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>