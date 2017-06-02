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
          <!-- Content -->
<div class="container">
  <div class="text-center">
    <h1>Register</h1>
    <hr /><br />
  </div>
  <form class="col-md-7 col-md-offset-2 form-horizontal" name="regist" action="modules/registerprocess.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label class="col-sm-4 control-label">Nama</label>
      <div class="col-sm-8">
        <input name="nama" type="text" class="form-control" placeholder="Nama" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-4 control-label">Email</label>
      <div class="col-sm-8">
        <input name="email" type="email" class="form-control" placeholder="Email" required>
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-4 control-label">Password</label>
      <div class="col-sm-8">
        <input name="password" type="password" class="form-control" placeholder="Password" required>
      </div>
    </div>

  <div class="form-group">
      <label class="col-sm-4 control-label">Alamat</label>
      <div class="col-sm-8">
        <input name="alamat" type="text" class="form-control" placeholder="Alamat" required>
      </div>
    </div>

    <div class="form-group">
        <label class="col-sm-4 control-label">No.Telp</label>
        <div class="col-sm-8">
          <input name="notelp" type="number" min="0" class="form-control" placeholder="No.Telpon" required>
        </div>
      </div>

    <div class="form-group">
      <label class="col-sm-4 control-label">Jenis Kelamin</label>
      <div class="col-sm-8">
        <label class="radio-inline">
        <input type="radio" name="jk" value="L" checked> Laki-laki
      </label>
      <label class="radio-inline">
        <input type="radio" name="jk" value="P"> Perempuan
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
