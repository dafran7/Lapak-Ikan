<?php
	include "connect.php";

	$nama = $_POST['nama_item'];
	$deskripsi = $_POST['deskripsi_item'];
	$qty = $_POST['quantity'];
	$harga = $_POST['harga'];
	$berat = $_POST['berat'];
	$diskon = $_POST['diskon'];


	$sql_buat = "INSERT INTO item(item_id, nama_item, deskripsi_item, quantity, harga, berat, diskon, penjualan, fresh, pengunjung) VALUE('','$nama','$deskripsi','$qty','$harga','$berat','$diskon')";

	if (mysqli_query($conn, $sql_buat)){
		$query = mysqli_query($conn, "SELECT * FROM item WHERE nama_item='$nama'");
  		$result = mysqli_fetch_array($query);
		$_SESSION['id'] = $result['item_id'];
		$_SESSION['status'] = "User";
?>
		<script language="javascript">alert("Register Successful");</script>
		<script>document.location.href='../profile.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Register Failed");</script>
		<script>document.location.href='../register.php';</script>
<?php
	}
	mysqli_close($conn);
?>
