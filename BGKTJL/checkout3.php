<?php
  include "modules/connect.php";
  if($_SESSION['status'] == "User"){
   	$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
  }
   $_SESSION['delivery'] = $_POST['delivery'];
    
  $shipping = $_POST['shipcost'];
$_SESSION['shipcost']=$shipping;
?>


<!DOCTYPE html>
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
                        <li><a href="index.php">Home</a>
                        </li>
                        <li>Checkout - Payment method</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="checkout4.php">
                            <h1>Checkout - Payment method</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li><a href="checkout1.php"><i class="fa fa-map-marker"></i><br>Address</a>
                                </li>
                                <li><a href="checkout2.php"><i class="fa fa-truck"></i><br>Delivery Method</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-money"></i><br>Payment Method</a>
                                </li>
                                <li class="disabled"><a href="checkout4.php"><i class="fa fa-eye"></i><br>Order Review</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box payment-method">

                                            <h4>ATM Transfer</h4>

                                            <p>Transfer using ATM.</p>

                                            <div class="box-footer text-center">

                                                <input type="radio" name="payment" value="payment1" checked="checked">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                            </div>
                            <!-- /.content -->

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="checkout2.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Back to Shipping method</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Continue to Order review<i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
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
                                                    $product_discount = $cart_itm["diskon"];
                                                    $percent = 100;
                                                    $subtotal_discount = $product_price * $kuantitas * $product_discount / $percent; //calculate Price x Qty
                                                    $subtotal = $product_price * $kuantitas - $subtotal_discount;

                                                    $bg_color = ($b++%2==1) ? 'odd' : 'even'; //class for zebra stripe
                                                    $total = ($total + $subtotal);
                                                }
                                                $grand_total = $total + $shipping; //grand total including shipping cost
                                            }
                                                
                 ?>
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
                                                <?php echo $shipping?>
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