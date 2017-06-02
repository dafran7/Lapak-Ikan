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
                        <li>FAQ</li>
                    </ul>

                </div>

                <div class="col-md-3">
                    <!-- *** PAGES MENU ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Pages</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                              <li>
                                  <a href="about-us.php">About Us</a>
                              </li>
                                <li>
                                    <a href="faq.php">Frequently Asked Questions</a>
                                </li>
                                <li class=active>
                                    <a href="term-condition.php">Terms and Conditions</a>
                                </li>
                                <li >
                                    <a href="contact.php">Contact Us</a>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <!-- *** PAGES MENU END *** -->


                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2014" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">


                    <div class="box" id="contact">
                      <h2>Terms of Use</h2>
                      <p>Welcome to the LapakIkan.com website. Please read these terms and conditions carefully. The following Terms of Use govern your use and access of the Platform (defined below) and the use of the Services. By accessing the Platform and/or using the Services, you agree to be bound by these Terms of Use. If you do not agree to these Terms of Use, do not access and/or use this Platform or the Services.</p>

                      <p>Access to and use of password protected and/or secure areas of the Platform and/or use of the Services are restricted to Customers with accounts only. You may not obtain or attempt to obtain unauthorised access to such parts of this Platform and/or Services, or to any other protected information, through any means not intentionally made available by us for your specific use.</p>

                      <p>If you are below 18 years old: you must obtain consent from your parent(s) or legal guardian(s), their acceptance of these Terms of Use and their agreement to take responsibility for: (i) your actions; (ii) any charges associated with your use of any of the Services or purchase of Products; and (iii) your acceptance and compliance with these Terms of Use. If you do not have consent from your parent(s) or legal guardian(s), you must stop using/accessing this Platform and using the Services.</p>

                      <h3>1. Definitions & Interpretation</h3>

                      <p>Unless otherwise defined, the definitions and provisions in respect of interpretation set out in Schedule 1 will apply to these Terms of Use.</p>

                      <h3>2. General use of Services and/or access of Platform</h3>

                      <p>2.1 Guidelines to the use of Platform and/or Services: You agree to comply with any and all the guidelines, notices, operating rules and policies and instructions pertaining to the use of the Services and/or access to the Platform, as well as any amendments to the aforementioned, issued by us, from time to time. We reserve the right to revise these guidelines, notices, operating rules and policies and instructions at any time and you are deemed to be aware of and bound by any changes to the foregoing upon their publication on the Platform.</p>

                      <p>2.2 Restricted activities: You agree and undertake NOT to:</p>
                      <ul>
                        <li> impersonate any person or entity or to falsely state or otherwise misrepresent your affiliation with any person or entity;</li>
                        <li> use the Platform or Services for illegal purposes;</li>
                        <li> attempt to gain unauthorized access to or otherwise interfere or disrupt other computer systems or networks connected to the Platform or Services;</li>
                        <li> post, promote or transmit through the Platform or Services any Prohibited Materials;</li>
                        <li> interfere with another’s utilization and enjoyment of the Platform or Services;</li>
                        <li> use or upload, in any way, any software or material that contains, or which you have reason to suspect that contains, viruses, damaging components, malicious code or harmful components which may impair or corrupt the Platform’s data or damage or interfere with the operation of another Customer’s computer or mobile device or the Platform or Services; and</li>
                        <li> use the Platform or Services other than in conformance with the acceptable use policies of any connected computer networks, any applicable Internet standards and any other applicable laws.</li>
                      </ul>
                      <p>2.3 Availability of Platform and Services: We may, from time to time and without giving any reason or prior notice, upgrade, modify, suspend or discontinue the provision of or remove, whether in whole or in part, the Platform or any Services and shall not be liable if any such upgrade, modification, suspension or removal prevents you from accessing the Platform or any part of the Services.</p>

                      <p>2.4 Right, but not obligation, to monitor content: We reserve the right, but shall not be obliged to:</p>
                      <ul>
                        <li> monitor, screen or otherwise control any activity, content or material on the Platform and/or through the Services. We may in our sole and absolute discretion, investigate any violation of the terms and conditions contained herein and may take any action it deems appropriate;</li>
                        <li> prevent or restrict access of any Customer to the Platform and/or the Services;</li>
                        <li> report any activity it suspects to be in violation of any applicable law, statute or regulation to the appropriate authorities and to co-operate with such authorities; and/or</li>
                        <li> to request any information and data from you in connection with your use of the Services and/or access of the Platform at any time and to exercise our right under this paragraph if you refuse to divulge such information and/or data or if you provide or if we have reasonable grounds to suspect that you have provided inaccurate, misleading or fraudulent information and/or data.</li>
                      </ul>
                      <p>2.5 Privacy Policy: Your use of the Services and/or access to the Platform is also subject to the Privacy Policy as set out here.</p>

                      <p>2.6 Terms & Conditions of Sale: Purchases of any Product would be subject to the Terms & Conditions of Sale.</p>

                      <p>2.7 Additional terms: In addition to these Terms of Use, the use of specific aspects of the Materials and Services, more comprehensive or updated versions of the Materials offered by us or our designated sub-contractors, may be subject to additional terms and conditions, which will apply in full force and effect.</p>


                    </div>


                </div>
                <!-- /.col-md-9 -->
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
                    <p class="pull-left">© 2015 Your name goes here.</p>

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
