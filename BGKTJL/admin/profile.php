<!DOCTYPE html>
<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "User"){
   	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM identitas WHERE id_mahasiswa = '$id'");
	$result = mysqli_fetch_array($query);
  }
  else {
  	header('Location: login.php');
  }
?>
<html lang="en">
  <head>
  	<!-- Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title -->
	<title>Profile | Agriweb</title>

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
	        <li><a href="about.php">About</a></li>
	        <li><a href="contact.php">Contact</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	          	<?php if($_SESSION['status'] == "User") echo $result['nama_mahasiswa']; else echo 'Member Area'; ?>
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
	  <h1 style="font-size: 72px">
		Welcome back <?php echo $result['nama_mahasiswa']; ?>!
	  </h1>
	</div>

	<!-- JavaScript -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
