<!DOCTYPE html>

<?php
    include "modules/connect.php"; //agar slalu konek ke data base
    if($_SESSION['status'] == "User") {
   	  $id = $_SESSION['id'];
      $query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
      $result = mysqli_fetch_array($query);
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
                        <li><a href="#">Home</a>
                        </li>
                        <li>Become a Seller</li>
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
                                <li>
                                    <a href="pesenan.php"><i class="fa fa-list"></i> My orders</a>
                                </li>
                                
                                <li>
                                    <a href="customer-account.php"><i class="fa fa-heart"></i> My account</a>
                                </li>
                                <li class="active">
                                    <a href="#"><i class="fa fa-user"></i> Become a seller</a>
                                </li>
                                
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>Become a Seller</h1>
                        <p class="lead">Become a seller in LapakIkan.com.</p>
                        <p class="text-muted">Registering as a seller lets you to list and sell your item in LapakIkan.com  </p>

                        <h3>Your Business Detail</h3>

                        <form name="post" action="modules/sellerprocess.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="password_old">Business Name</label>
                                        <input type="text" class="form-control" name="business_name" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="business_address">Business Address</label>
                                        <input type="text" class="form-control" name="business_address" required>
                                    </div>
                                </div>
                              </div>

                            <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" required>
                                </div>
                            </div>
                          </div>

                            <div class="row">
                              <div class="col-sm-6 ">
                                  <div class="form-group">
                                      <label for="country">Country</label>
                                      <input type="text" class="form-control" name="country" ></select>
                                  </div>
                              </div>
                                <div class="col-sm-6 ">
                                    <div class="form-group">
                                        <label for="zip">ZIP</label>
                                        <input type="text" class="form-control" name="zip" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="form-group">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" name="state" ></select>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phone">Telephone</label>
                                        <input type="text" class="form-control" name="phone" required>
                                    </div>
                                </div>

                         <div class="col-sm-6">
                              <div class="form-group">
                                <label for="upload_id">Upload Legal ID(KTP/SIM/PASSPORT)</label>
                                  <input type="file" name="legal_id" accept="image/jpeg" required/>
                                </div>
                              </div>
                       <div class="col-sm-6">
                            <div class="form-group">
                              <label for="upload_bukutabungan">Upload Buku Tabungan</label>
                                <input type="file" name="buku_tab" accept="image/jpeg" required/>
                              </div>
                            </div>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary"> Become a Seller!</button>

                        </div>
                      </div>
                        </form>
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
