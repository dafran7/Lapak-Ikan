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
                <div class="container">

                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a>
                            </li>
                            <li>Shopping cart</li>
                        </ul>
                    </div>

                    <div class="col-md-9" id="basket">

                        <div class="box">

                            <form method="post" action="cart_update.php">

                                <h1>Shopping cart</h1>
                                <p class="text-muted">You currently have
                                    <?php 
                                    if(!(isset($_SESSION["cart_products"]))){
                                        echo "0";

                                    }
                                     else{
                                        $counter;
                                    }
                                    ?> item(s) in your cart.</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Product</th>
                                                <th>Quantity</th>
                                                <th>Unit price</th>
                                                <th>Discount</th>
                                                <th>Total</th>
                                                <th>Remove</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if(isset($_SESSION["cart_products"])) //check session var
                                            {
                                                $total = 0; //set initial total value
                                                $b = 0; //var for zebra stripe table 
                                                foreach ($_SESSION["cart_products"] as $cart_itm)
                                                {
                                                    //set variables to use in content below
                                                    $product_name = $cart_itm["nama_item"];
                                                    $kuantitas = $cart_itm["product_qty"];
                                                    $product_price = $cart_itm["harga"];
                                                    $product_code = $cart_itm["item_id"];
                                                
                                                    $subtotal = $product_price * $kuantitas; //calculate Price x Qty

                                                    $bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe 
                                                    echo '<tr>';
//                                                        echo '<td><a href="#"><img src="img/detailsquare.jpg" alt="White Blouse Armani"></a></td>';
                                                        echo '<td colspan="2">'.$product_name.'</td>';
                                                        echo '<td><input type="text" class="form-control" name="product_qty['.$product_code.']" value="'.$kuantitas.'" /></td>';
                                                        echo '<td>'.$currency.$product_price.'</td>';
                                                        echo '<td>$0.00</td>';
                                                        echo '<td>'.$currency.$subtotal.'</td>';
                                                        echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /></td>';
                                                    '</tr>';    
                                                    $total = ($total + $subtotal);
                                                }
                                                $grand_total = $total + $shipping_cost; //grand total including shipping cost
		                                        $shipping_cost = ($shipping_cost)?''. sprintf("%d", $shipping_cost).'<br />':'';
                                            }
                                        ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th colspan="2">Rp.
                                                    <?php 
                                                    if(!(isset($_SESSION["cart_products"]))){
                                                        echo "0";
                        
                                                    }
                                                    else{
                                                        echo $total;
                                                    }
                                                    ?>
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>
                                <!-- /.table-responsive -->

                                <div class="box-footer">
                                    <div class="pull-left">
                                        <a href="index2.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-default"><i class="fa fa-refresh"></i> Update basket</button>
                                        <a href="checkout1.php" <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i>
                                    </button></a>
                                    </div>
                                </div>
                                <input type="hidden" name="return_url" value="<?php $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                            echo $current_url; ?>" />
                            </form>

                        </div>
                        <!-- /.box -->

                    </div>
                    <!-- /.col-md-9 -->

                    <div class="col-md-3">
                        <div class="box" id="order-summary">
                            <div class="box-header">
                                <h3>Order summary</h3>
                            </div>
                            <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>

                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Order subtotal</td>
                                            <th>Rp
                                                <?php 
                                                    if(!(isset($_SESSION["cart_products"]))){
                                                        echo "0";
                        
                                                    }
                                                    else{
                                                        echo $total;
                                                    }
                                                    ?>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>Shipping and handling</td>
                                            <th>Rp
                                                <?php echo $shipping_cost?>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>Tax</td>
                                            <th>Rp
                                                <?php echo $shipping_cost?>
                                            </th>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <th>Rp
                                                <?php 
                                                    if(!(isset($_SESSION["cart_products"]))){
                                                        echo "0";
                        
                                                    }
                                                    else{
                                                        echo $grand_total;
                                                    }
                                                    ?>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                    <!-- /.col-md-3 -->

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