<?php
	include "modules/connect.php";

  $id = $_SESSION['id']; // variabel tambahan dari edit.php
	$email = $_POST['email']; // dollar underscore post itu ngambil data dari yang sebelumnya
	//$pass = $_POST['passmhs'];//gak dipake soalnya password
	$alamat = $_POST['alamat'];
	$name = $_POST['nama'];
	$nim = $_POST['notelp'];
	//$jk = $_POST['jk'];

//insert into buat nambahin entitas ke data base
//php gak ada tipe varibel ,, jadi enak aja masuk masukin
	$sql_ganti = "UPDATE user SET email = '$email',nama = '$name', notelp = '$nim', alamat = '$alamat' WHERE id_user = '$id'";
	if (mysqli_query($conn, $sql_ganti)){
?>
		<script language="javascript">alert("Edit Successful");</script>   //skrip javascript untuk alert sderhana
		<script>document.location.href='index.php';</script> //untuk nge link
<?php
	}
	else{
?>
		<script language="javascript">alert("Edit Failed");</script>
		<script>document.location.href='index.php';</script>
<?php
	}
	mysqli_close($conn); //untuk nutup koneksi,, agar abis ngirim data gak ada script lagi masuk ke data base
?>
