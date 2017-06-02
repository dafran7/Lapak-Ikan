    <!DOCTYPE html>
    <html lang="en">
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
    <head>
    
<?php $tes=mysqli_query($conn,"SELECT * FROM item WHERE id_user = '$id'");$isi1=mysqli_num_rows($tes);
        
        $tes1=mysqli_query($conn,"SELECT * FROM item WHERE id_user = '$id'");
        $arraytes1=mysqli_fetch_array($tes1);
        $counter=mysqli_num_rows($tes);$sum=0;
        while($counter){
            $sum=$sum+$arraytes1['pengunjung'];$counter=$counter-1;
                        }
        $counter=mysqli_num_rows($tes);
        $sum1=0;
        while($counter){
            $sum1=$sum1+$arraytes1['penjualan'];$counter=$counter-1;
                        }
             ?>
        <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lapak Ikan">
    <meta name="author" content="BGKTJL">
    <meta name="keywords" content="">

    <title>
        Lapak Ikan
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
    <link rel="shortcut icon" href="favico111n.png">
    
    <script src="js/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>



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
            <div class="container">

                <div class="col-md-12">

                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>My account</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***
 _________________________________________________________ -->
                    
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Seller section</h3>
                        </div>

                        <div class="panel-body">

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="#" ><i class="fa fa-list"></i> Statistik</a>
                                </li>
                                <li>
                                    <a href="add-list.php"><i class="fa fa-shopping-cart"></i> Add New Listing</a>
                                </li>
                                <li>
                                    <a href="myorder.php"><i class="fa fa-user"></i> My Order</a>
                                </li>
                                <li>
                                    <a href="my-sales.php"><i class="fa fa-shopping-cart"></i> My Sales</a>
                                </li>
                                
                            </ul>
                        </div>

                    </div>
                    <!-- /.col-md-3 -->

                    <!-- *** CUSTOMER MENU END *** -->
                </div>

                <div class=col-md-9>
                    <div class=box>
                       <br>
                       <br>
                        <div class=col-md-4>
                           
                            <center>
                                <h4>Jumlah Item yang Dijual</h4>
                            </center>
                            <canvas id="statOrder"></canvas>
                            <script>
                                var ctx = document.getElementById('statOrder').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Banyak Item'],
                                        datasets: [{
                                            label: 'Banyak Item',
                                            data: [<?php echo $isi1 ?>],
                                            backgroundColor: "rgba(153,255,51,0.4)"
                                        }, ]
                                    }
                                });
                            </script>
                        </div>

                        <div class=col-md-4>
                            <center>
                                <h4>Jumlah Viewer Total</h4>
                            </center>
                            <canvas id="viewer"></canvas>
                            <script>
                                var ctx = document.getElementById('viewer').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Jumlah Viewer'],
                                        datasets: [{
                                            label: 'Jumlah Viewer',
                                            data: [ <?php echo $sum?> ],
                                            backgroundColor: "rgba(255,120,151,0.4)"
                                        }   ]
                                    }
                                });
                            </script>
                        </div>
                        <div class=col-md-4>
                            <center>
                                <h4>Jumlah Penjualan Total</h4>
                            </center>
                            <canvas id="penjualan"></canvas>
                            <script>
                                var ctx = document.getElementById('penjualan').getContext('2d');
                                var myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['Total Penjualan'],
                                        datasets: [{
                                            label: 'Total Penjualan',
                                            data: [ <?php echo $sum1?> ],
                                            backgroundColor: "rgba(255,120,151,0.4)"
                                        }   ]
                                    }
                                });
                            </script>
                        </div>
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        
                       


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