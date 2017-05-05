<!DOCTYPE html>
<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "User"){
   	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
  }

  $id_item = $_GET['item_id'];
  $que_item = mysqli_query($conn, "SELECT * FROM item WHERE item_id = '$id_item'");
	$item = mysqli_fetch_array($que_item);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title><?php echo $item['nama_item']?> | Lapak Ikan</title>

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
                <p class="lead">Shop Name</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="thumbnail">
                    <img class="img-responsive" src="images/<?php echo $item['gambar_item']?>" alt=<?php echo $item['nama_item']?>>
                    <div class="caption-full">
                        <h4 class="pull-right">Rp<?php echo $item['harga']?></h4>
                        <h4><a href="#"><?php echo $item['nama_item']?></a>
                        </h4>
                        <p>          <?php echo $item['penjualan']?> sold </p>
                        <p>
                          <?php echo $item['deskripsi_item']?>

                        </p>
                    </div>
                    <div class="ratings">
                        <p class="pull-right"><?php echo $item['pengunjung'] ?> visitors</p>
                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                </div>

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-success">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                    </div>

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
