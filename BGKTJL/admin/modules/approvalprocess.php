<?php
	include"connect.php";
    $id = $_GET['id'];
    $value = $_POST['approval'];

	$sql_data = "UPDATE seller SET approval = '$value' WHERE id_user = '$id'";
    $sql_user = "UPDATE user SET jenis = '$value' WHERE id_user = '$id'";

	if (mysqli_query($conn, $sql_data) && mysqli_query($conn, $sql_user)){
?>
		<script language="javascript">alert("Approval Sucessful");</script>
		<script>document.location.href='../seller.php';</script>
<?php
        
	}
	else{
        
?>
		<script language="javascript">alert("Something Wrong. Delete Item Failed");</script>
		<script>document.location.href='../seller.php';</script>
<?php
	}
	mysqli_close($conn); //untuk nutup koneksi,, agar abis ngirim data gak ada script lagi masuk ke data base
?>
