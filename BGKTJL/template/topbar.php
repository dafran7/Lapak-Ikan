<div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">

            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">
                  <?php if($_SESSION['status'] == "User") {?>
                    <li><a href="customer-account.php"> <?php echo $result['nama']?></a>
                    </li>
                        <!-- Seller page-->
                    <?php if($result['jenis']==1) {?>
                      <li><a href="seller/index.php">Seller page</a>
                      </li>
                    <?php } ?>
                    <li><a href="modules/logout.php">Logout</a>
                    </li>
                  <?php } else { ?>
                    <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li><a href="register.php">Register</a>
                    </li>
                    <!-- <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                    </li>
                    <li>
                      ::before
                      <a href="register.php">Register</a>
                    </li> -->
                  <?php } ?>
                  <!-- Changes
                   <li><a href="contact.html">Contact</a>
                    </li>

                    <li><a href="#">Recently viewed</a>
                    </li>
                  -->
                </ul>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form class="col-md-7 col-md-offset-2 form-horizontal" name="signin" action="modules/loginprocess.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                 <input name="email" type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>
<br><br><br><br><br><br><br><br><br><br>
                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="register.php"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

    </div>
