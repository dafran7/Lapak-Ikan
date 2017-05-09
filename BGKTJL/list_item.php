<!DOCTYPE html>
<?php
	include "modules/connect.php";
	if($_SESSION['status'] == "User"){
		$id = $_SESSION['id'];
	$query = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id'");
	$result = mysqli_fetch_array($query);
	$id_usr = $result['id_user'];
	$qry_item = mysqli_query($conn, "SELECT * FROM item WHERE id_user='$id'");

}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Data</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<center>
		<h1>Daftar Item</h1><br><br>
	</center>
	<div style="width: 80%; margin: auto;">
	<table class="table centered">
	<tr>
		<th>No</th>
		<th>Nama Item</th>
		<th>Harga</th>
		<th>Deskripsi Item</th>
		<th>Quantity</th>
		<th colspan="2">Menu</th>
	</tr>
<?php
	$count = 1;
	while($items = mysqli_fetch_array($qry_item)){
		echo
		'<tr>
			<td>'.$count++.'</td>
			<td>'.$items['nama_item'].'</td>
			<td>'.$items['harga'].'</td>
			<td>'.$items['deskripsi_item'].'</td>
			<td>'.$items['quantity'].'</td>
			<td><a href="edit.php?id='.$items['item_id'].'"><button type="button" class="btn btn-primary">Edit</button></td>
			<td><button type="button" class="btn btn-danger">Delete</button></td>
		</tr>';
	}
?>
	</table>
	</div>
</body>
</html>
