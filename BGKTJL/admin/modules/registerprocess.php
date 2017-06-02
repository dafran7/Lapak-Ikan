<?php
	include "connect.php";

	$email = $_POST['emailmhs'];
	$pass = md5($_POST['passmhs']);
	$name = $_POST['namamhs'];
	$nim = $_POST['nimmhs'];
	$jk = $_POST['jkmhs'];

	$sql_buat = "INSERT INTO identitas(id_mahasiswa, email_mahasiswa, pass_mahasiswa, nama_mahasiswa, nim_mahasiswa, gender	) VALUE('','$email','$pass','$name','$nim','$jk')";

	if (mysqli_query($conn, $sql_buat)){
		$query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE email_mahasiswa='$email'");
  		$result = mysqli_fetch_array($query);
		$_SESSION['id'] = $result['id_mahasiswa'];
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
