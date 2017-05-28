<!DOCTYPE html>
<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "User"){
   	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
  }

  $query_item = mysqli_query($conn, "SELECT * FROM item");
  //$tampil_item = mysqli_query($query_item);
?>

    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">

    <title>
        Obaju : e-commerce template
    </title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/respond.min.js"></script>

    <link rel="shortcut icon" href="favicon.png">



    </head>

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
                       <h1>Selamat!</h1>
                       <h2>Order Dengan ID <?php echo $_SESSION['order_id'] ;unset($_SESSION['order_id']);?> telah diterima.<br>
                       Silahkan Transfer ke Rekening BCA
                       dengan Nomor Rekening 02114045</h2>
                </div>
                <!-- /.container -->
            </div>
            <!-- /#content -->


            <!-- *** FOOTER ***
        <?php include 'template/footer.php' ?>
            <!-- *** FOOTER END *** -->




            <!-- *** COPYRIGHT ***
_________________________________________________________ -->
            <div id="copyright">
                <div class="container">
                    <div class="col-md-6">
                        <p class="pull-left">© 2017 LapakIkan.</p>

                    </div>
                    <div class="col-md-6">
                        <p class="pull-right">Template by <a href="http://bootstrapious.com/e-commerce-templates">Bootstrapious</a> with support from <a href="https://kakusei.cz">Kakusei</a>
                            <!-- Not removing these links is part of the licence conditions of the template. Thanks for understanding :) -->
                        </p>
                    </div>
                </div>
            </div>
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