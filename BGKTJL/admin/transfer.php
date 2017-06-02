<?php include 'modules/navbar.php' ?>
	<!-- Content -->
	<div class="container" style="text-align: center">
	 <?php if($_SESSION['status'] == "Admin") { ?> <center>
		<h1>Daftar Pengajuan Seller</h1><br><br>
	</center>
	<div style="width: 80%; margin: auto;">
	<table class="table centered">
	
	<tr>
		<th>No</th>
		
		<th>ID User</th>
		<th>Nama Toko</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Kota</th>
		<th>Kode Pos</th>
		<th>No. Telp</th>
		<th colspan="2">Data Foto</th>
		<th colspan="2">Approval</th>
	</tr>
	<?php } ?>
<?php
	$count = 1;
    $queryseller = mysqli_query($conn, "SELECT * FROM seller WHERE approval='0'");
	while($result1 = mysqli_fetch_array($queryseller)){
		echo
		'<tr>
			<td>'.$count++.'</td>
			
			<td>'.$result1['id_user'].'</td>
			<td>'.$result1['bs_name'].'</td>
			<td>'.$result1['bs_address'].'</td>
            <td>'.$result1['email'].'</td>
            <td>'.$result1['cty_state'].'</td>
            <td>'.$result1['ZIP'].'</td>
            <td>'.$result1['notelp'].'</td>
            <td><a href="../images/legal_id/'.$result1['upload_files'].'">Legalitas</a></td>
            <td><a href="../images/buku_tabungan/'.$result1['upload_files'].'">Buku</a></td>
			<td class="approval">
                          			    <form action="modules/approvalprocess.php?id='.$result1['id_user'].'" method="post">
                          			        <input type="hidden" name="approval" value="1">
                          			        <input type="submit" class="btn btn-primary" name="submit" value="Yes">
                          			    </form>
                          			</td>
			<td class="contact-delete">
                          			    <form action="modules/approvalprocess.php?id='.$result1['id_user'].'" method="post">
                          			        <input type="hidden" name="approval" value="2">
                          			        <input type="submit" class="btn btn-danger" name="submit" value="Delete">
                          			    </form>
                          			</td>
		</tr>';
	}
?>
	</table>
	</div>
	</div>
	
	<!-- JavaScript -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>