<?php
	include "connect.php";

	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$query = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' and password='$password'");
  $result = mysqli_fetch_array($query);
	if ($result) {
	$_SESSION['id'] = $result['id_user'];
		$_SESSION['status'] = "User";
?>
		<script language="javascript">alert("Login Successful");</script>
		<script>document.location.href='../profile.php';</script>
<?php
	}
	else{
?>

		<script language="javascript">alert("Login Failed");</script>

<?php
	}
	mysqli_close($conn);
?>
