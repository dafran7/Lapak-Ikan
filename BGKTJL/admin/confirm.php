<?php include 'modules/navbar.php' ?>
	<!-- Content -->
	<div class="container" style="text-align: center">
	 <?php if($_SESSION['status'] == "Admin") { ?> <center>
		<h1>Daftar Konfirmasi Pembayaran</h1><br><br>
	</center>
	<div style="width: 80%; margin: auto;">
	<table class="table centered">
	
	<tr>
		<th>No</th>
		
		<th><center>Order Id</center></th>
		<th><center>Atas Nama</center></th>
		<th><center>Bank</center></th>
		<th><center>Jumlah Pembayaran</center></th>
		<th><center>Bukti Pembayaran</center></th>
        <th colspan="2"><center>Konfirmasi</center></th>
	</tr>
<?php
	$count = 1;
    $querybuyyer = mysqli_query($conn, "SELECT * FROM pembayaran WHERE status='0'");
	while($result1 = mysqli_fetch_array($querybuyyer)){
		echo
		'<tr>
			<td>'.$count++.'</td>
			
			<td>'.$result1['order_id'].'</td>
			<td>'.$result1['atasnama'].'</td>
			<td>'.$result1['bank'].'</td>
            <td>'.$result1['banyak'].'</td>
            <td><a href="../images/bukti_pembayaran/'.$result1['gambar'].'">Bukti Pembayaran</a></td>
			<td class="approval">
                          			    <form action="modules/confirmationprocess.php?id='.$result1['order_id'].'" method="post">
                          			        <input type="hidden" name="approval" value="1">
                          			        <input type="submit" class="btn btn-primary" name="submit" value="Approve">
                          			    </form>
                          			</td>
			<td class="contact-delete">
                          			    <form action="modules/confirmationprocess.php?id='.$result1['order_id'].'" method="post">
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