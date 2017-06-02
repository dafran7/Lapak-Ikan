<?php
	include"connect.php";
	if($_SESSION['status'] == "User"){
	$id		= $_SESSION['id'];
}
    
    $id_item = $_GET['id'];

    $approval = $_POST['approval'];
    $sql_confirm = "UPDATE orderbiji SET status = '$approval' WHERE item_id = '$id_item'";
    
    if (mysqli_query($conn, $sql_confirm)){
?>
		<script language="javascript">alert("Success Pembayaran");</script>
		<script>document.location.href='../pesenan.php';</script>
		<?php} 
else{
        
?>
		<script language="javascript">alert("Something Wrong. Confirm Payment Failed");</script>
		<script>document.location.href='../pesenan.php';</script>


<?php
	}
	mysqli_close($conn);
?>