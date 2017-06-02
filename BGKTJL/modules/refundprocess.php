<?php
	include"connect.php";
	if($_SESSION['status'] == "User"){
	$id		= $_SESSION['id'];
}
    $refund_id=time();
	$order_id = $_POST['order_id'];
	$alasan = $_POST['alasan'];
	$email = $_POST['email'];
	$norek = $_POST['norek'];
	$namarek	= $_POST['namarek'];
	$bank		= $_POST['bank'];
    
	$input = "INSERT INTO refund(refund_id, order_id, alasan, email, norek, namarek, bank) VALUES('$refund_id','$order_id','$alasan','$email','$norek','$namarek','$bank')";


  

	if (mysqli_query($conn, $input)){
?>
		<script language="javascript">alert("Request Refund Berhasil");</script>
		<script>document.location.href='../refund_landing.php?id=<?php echo $refund_id ?>';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Mohon Masukan Order ID yang sudah dipesan");</script>
<script>document.location.href='../refund.php';</script>
<?php
	}
	mysqli_close($conn);
?>

