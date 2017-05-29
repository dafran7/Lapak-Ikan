<!DOCTYPE html>
<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "User"){
   	header('Location: profile.php');
  }
?>
<html lang="en">
  <head>
  	<!-- Meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Title -->
	<title>Register | Agriweb</title>

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
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Member Area <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="login.php">Login</a></li>
	            <li><a href="#">Register</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!-- Content -->
	<div class="container">
	  <div class="text-center">
	  	<h1>Register</h1>
	  	<hr /><br />
	  </div>
	  <form class="col-md-7 col-md-offset-2 form-horizontal" name="regist" action="modules/registerprocess.php" method="POST" enctype="multipart/form-data">
	    <div class="form-group">
	      <label class="col-sm-4 control-label">Email</label>
	      <div class="col-sm-8">
	        <input name="emailmhs" type="email" class="form-control" placeholder="Email">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="col-sm-4 control-label">Password</label>
	      <div class="col-sm-8">
	        <input name="passmhs" type="password" class="form-control" placeholder="Password">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="col-sm-4 control-label">Nama</label>
	      <div class="col-sm-8">
	        <input name="namamhs" type="text" class="form-control" placeholder="Nama">
	      </div>
	    </div>
		<div class="form-group">
	      <label class="col-sm-4 control-label">NIM</label>
	      <div class="col-sm-8">
	        <input name="nimmhs" type="text" class="form-control" placeholder="NIM">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="col-sm-4 control-label">Jenis Kelamin</label>
	      <div class="col-sm-8">
	        <label class="radio-inline">
		  	  <input type="radio" name="jkmhs" value="L"> Laki-laki
		    </label>
		    <label class="radio-inline">
		      <input type="radio" name="jkmhs" value="P"> Perempuan
		    </label>
		  </div>
	    </div>
	    <div class="form-group">
	      <div class="text-right" style="margin-right: 20px">
	      	<br><button type="submit" class="btn btn-primary">Register</button>
	      </div>
	    </div>
	  </form>
	</div>
	
	<!-- JavaScript -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>