<?php
	include "modules/connect.php";
	$query = mysqli_query($conn, "SELECT * FROM user");
	$id = $_SESSION['id']; // variabel tambahan dari edit.php
	$passlama = md5($_POST['passlama']); // dollar underscore post itu ngambil data dari yang sebelumnya
	//$pass = $_POST['passmhs'];//gak dipake soalnya password
	$passbaru = md5($_POST['passbaru']);
	$repass = md5($_POST['repass']);
	//$alamat = $_POST['alamat'];
	$querypasslama = mysqli_query($conn, "SELECT * FROM user WHERE password = '$passlama'");
//insert into buat nambahin entitas ke data base
//php gak ada tipe varibel ,, jadi enak aja masuk masukin
	$sql_ganti = "UPDATE user SET password = '$passbaru' WHERE id_user = '$id'";
	if(mysqli_num_rows($querypasslama))
	{
		if($passbaru == $repass)
		{
			$sql_ganti = "UPDATE user SET password = '$passbaru' WHERE id_user = '$id'";
			if (mysqli_query($conn, $sql_ganti)){
?>
				<script language="javascript">alert("Edit Successful");</script>   //skrip javascript untuk alert sderhana
				<script>document.location.href='index.php';</script> //untuk nge link
<?php
			}

			else{
?>
				<script language="javascript">alert("Password Tidak Cocok");</script>
				<script>document.location.href='index.php';</script>
<?php
			}
		}
		else
		{
?>
			<script language="javascript">alert("Edit Failed");</script>
			<script>document.location.href='index.php';</script>
<?php
		}
		 //untuk nutup koneksi,, agar abis ngirim data gak ada script lagi masuk ke data base
	}
	else
	{
?>
		<script language="javascript">alert("Edit Failed");</script>
		<script>document.location.href='index.php';</script>
<?php
	}
	mysqli_close($conn);
?>
?>
