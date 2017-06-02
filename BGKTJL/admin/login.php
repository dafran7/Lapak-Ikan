<?php include 'modules/navbar.php' ?>
	<!-- Content -->
	<div class="container">
	  <div class="text-center">
	  	<h1>Login</h1>
	  	<hr /><br />
	  </div>
	  <form class="col-md-7 col-md-offset-2 form-horizontal" name="signin" action="modules/loginprocess.php" method="POST" enctype="multipart/form-data">
	    <div class="form-group">
	      <label class="col-sm-4 control-label">Email</label>
	      <div class="col-sm-8">
	        <input name="email" type="email" class="form-control" placeholder="Email">
	      </div>
	    </div>
	    <div class="form-group">
	      <label class="col-sm-4 control-label">Password</label>
	      <div class="col-sm-8">
	        <input name="password" type="password" class="form-control" placeholder="Password">
	      </div>
	    </div>
	    <div class="form-group">
	      <div class="text-right" style="margin-right: 20px">
	      	<br><button type="submit" class="btn btn-primary">Login</button>
	      </div>
	    </div>
	  </form>
	</div>
	
	<!-- JavaScript -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>