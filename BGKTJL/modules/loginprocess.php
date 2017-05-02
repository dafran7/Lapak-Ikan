<?php
	include "connect.php";

	$email = $_POST['emailmhs'];
	$pass = md5($_POST['passmhs']);
	$query = mysqli_query($conn, "SELECT * FROM identitas WHERE email_mahasiswa='$email' and pass_mahasiswa='$pass'");
  	$result = mysqli_fetch_array($query);

	if ($result) {
		$_SESSION['id'] = $result['id_mahasiswa'];
		$_SESSION['status'] = "User";
?>
		<script language="javascript">alert("Login Successful");</script>
		<script>document.location.href='../profile.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Login Failed");</script>
		<script>document.location.href='../login.php';</script>
<?php
	}
	mysqli_close($conn);
?>
