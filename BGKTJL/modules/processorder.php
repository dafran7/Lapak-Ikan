<?php
	include"connect.php";
    $id = $_GET['id'];
    $value = $_POST['approval'];
    $order_id = $_POST['order'];

	$sql_data = "UPDATE orderbiji SET status = '$value' WHERE item_id = '$id' and order_id = $order_id";
   

	if (mysqli_query($conn, $sql_data)){
?>
		<script language="javascript">alert("Processing Sucessful");</script>
		<script>document.location.href='../myorder
                .php';</script>
                <script>document.location.href='../myorder.php';</script>
<?php
        
	}
	else{
        
?>
		<script language="javascript">alert("Something Wrong. Processing Failed");</script>
		<script>document.location.href='../myorder.php';</script>
		
<?php
	}
	mysqli_close($conn); //untuk nutup koneksi,, agar abis ngirim data gak ada script lagi masuk ke data base
?>
