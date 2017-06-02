<?php include 'modules/navbar.php' ?>
	<!-- Content -->
	<div class="container" style="text-align: center">
	 <?php if($_SESSION['status'] == "Admin") { ?> <center>
		<h1>Daftar Request Refund</h1><br><br>
	</center>
	<div style="width: 80%; margin: auto;">
	<table class="table centered">
	
	<tr>
		<th>No</th>
		
		<th><center>Refund ID</center></th>
		<th><center>Order ID</center></th>
		<th><center>Alasan</center></th>
		<th><center>Email</center></th>
		<th><center>No. Rekening</center></th>
       <th><center>Atas Nama</center></th>
       <th><center>Bank</center></th>
        <th colspan="2"><center>Konfirmasi</center></th>
	</tr>
<?php
	$count = 1;
    $querybuyyer = mysqli_query($conn, "SELECT * FROM refund WHERE status='0'");
	while($result1 = mysqli_fetch_array($querybuyyer)){
		echo
		'<tr>
			<td>'.$count++.'</td>
			
			<td>'.$result1['refund_id'].'</td>
			<td>'.$result1['order_id'].'</td>
			<td>'.$result1['alasan'].'</td>
            <td>'.$result1['email'].'</td>
            <td>'.$result1['norek'].'</td>
            <td>'.$result1['namarek'].'</td>
            <td>'.$result1['bank'].'</td>
			<td class="approval">
                          			    <form action="modules/refundprocess.php?id='.$result1['order_id'].'" method="post">
                          			        <input type="hidden" name="approval" value="1">
                          			        <input type="submit" class="btn btn-primary" name="submit" value="Approve">
                          			    </form>
                          			</td>
			<td class="contact-delete">
                          			    <form action="modules/refundprocess.php?id='.$result1['order_id'].'" method="post">
                          			        <input type="hidden" name="approval" value="2">
                          			        <input type="submit" class="btn btn-danger" name="submit" value="Decline">
                          			    </form>
                          			</td>
		</tr>';
	}
?>
        <?php } ?>
	</table>
	</div>
	</div>
	
	<!-- JavaScript -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>