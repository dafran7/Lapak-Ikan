<?php
	include"connect.php";
  $id = $_GET['id'];

	$sql_delete = "DELETE FROM item WHERE item_id = '$id'";
	if (mysqli_query($conn, $sql_delete)){
?>
		<script language="javascript">alert("Delete Item Successful");</script>
		<script>document.location.href='../list-item.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("OOPS! Something Wrong. Delete Item Failed");</script>
		<script>document.location.href='../list-item.php';</script>
<?php
	}
	mysqli_close($conn); //untuk nutup koneksi,, agar abis ngirim data gak ada script lagi masuk ke data base
?>
