<?php
	include"connect.php";
    $id = $_GET['id'];
    //$value = $_POST['id'];

	$sql_confirm = "UPDATE orderdata SET pembayaran = 1 WHERE order_id = '$id'";
    $sql_remove = "DELETE FROM pembayaran WHERE order_id = '$id'";

	if (mysqli_query($conn, $sql_confirm) && mysqli_query($conn, $sql_remove)){
?>
		<script language="javascript">alert("Approval Sucessful");</script>
		<script>document.location.href='../confirm.php';</script>
<?php
        
	}
	else{
        
?>
		<script language="javascript">alert("Something Wrong. Confirm Payment Failed");</script>
		<script>document.location.href='../confirm.php';</script>
<?php
	}
	mysqli_close($conn); //untuk nutup koneksi,, agar abis ngirim data gak ada script lagi masuk ke data base
?>