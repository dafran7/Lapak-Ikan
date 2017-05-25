<?php
	include "connect.php";

	$nama = $_SESSION['nama'] ;
    $alamat = $_SESSION['alamat'];
    $telp = $_SESSION['telp'];
    $email = $_SESSION['email'];
    $delivery = $_SESSION['delivery']; 
    $payment = $_SESSION['payment'];
    $order_id = time().$_SESSION['id'];
    $harga = $_SESSION['grandtotal'];
    $id_user=$_SESSION['id'];
    

	$sql_data = "INSERT INTO orderdata(order_id, atasnama, harga, shipper, payment, alamat, telp) VALUE('$order_id','$nama','$harga','$delivery','$payment','$alamat','$telp')";
    "INSERT INTO orderitem(order_id, id_user, item_id, quantity, harga, alamat, id_seller) VALUE('$order_id','$id_user','','','$harga,'$alamat','')";
    

    $checker=mysqli_multi_query($conn, $sql_data);

	if ($checker){
        do{
            if (($checker = mysqli_store_result($conn)) === false && mysqli_error($conn) != ''){
                echo "Query Failed".mysqli_error($conn);
            }
        }while (mysqli_more_results($conn)&&mysqli_next_result($conn));
    

		$_SESSION['id'] = $id_user;
		$_SESSION['status'] = "User";
?>
		<script language="javascript">alert("Register Successful");</script>
        <script>document.location.href='../index.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Register Failed");</script>

<?php
	}
	mysqli_close($conn);
?>
