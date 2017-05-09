<!DOCTYPE html>
<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "User"){
   	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
  }
  else {

  }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>Posting item | Lapak Ikan</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>

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
    <!-- Custom CSS -->


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <h2 class="lead">Post your item</h2>
            <br>

            <div class="col-md-9">

              <form action="post_item.php" method="post" enctype="multipart/form-data">
                <div>
                  <label>Nama Barang :</label><br>
                  <input type="text" maxlength="40" name="nama_item" placeholder="Masukkan nama barang" required>
                </div>
                <br>
                <div>
                  <label>Harga Barang :</label><br>
                  <input type="text" name="harga" placeholder="Masukan harga barang/kg" required>
                </div>
                <br>
                <div>
                  <label>Deskripsi Barang :</label><br>
                  <textarea type="text" rows="4" cols="50" name="deskripsi_item" placeholder="Masukan deskripsi untuk barang anda" required>
                  </textarea>
                </div>
                <br>
                <div>
                  <label>Upload Foto :</label><br>
                      <input type="file" accept="image/jpeg" name="gambar_item" required/>
                </div>
                <br>
                <button type="submit">Post</button>
              </form><br>


            </div>
          </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
