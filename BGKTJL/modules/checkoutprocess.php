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
    unset($_SESSION['nama']);
    unset($_SESSION['shipcost']);
    unset($_SESSION['alamat']);
    unset($_SESSION['telp']);
    unset($_SESSION['email']);
    unset($_SESSION['delivery']);
    unset($_SESSION['payment']);
    
    $total = 0; //set initial total value
    $_SESSION['order_id']=$order_id;                                     

	$sql_data = "INSERT INTO orderdata(order_id, atasnama, harga, shipper, payment, alamat, telp,id_user) VALUE('$order_id','$nama','$harga','$delivery','$payment','$alamat','$telp','$id_user')";
    if(isset($_SESSION["cart_products"])) //check session var
                                            {
        $i=0;
    foreach ($_SESSION["cart_products"] as $cart_itm)
                                                {
                                                    $kuantitas = $cart_itm["product_qty"];
                                                    $product_price = $cart_itm["harga"];
                                                    $product_code = $cart_itm["item_id"];
                                                    $myquery = "SELECT * FROM item WHERE item_id ='$product_code' ";
                                                    $hasil = mysqli_query($conn,$myquery);
                                                    $data  = mysqli_fetch_array($hasil);
                                                    $id_seller=$data['id_user'];
                                                    $sql_item[$i] = "INSERT INTO orderbiji(order_id,item_id,id_user,quantity,harga,alamat,id_seller) VALUE('$order_id','$product_code','$id_user','$kuantitas','$product_price','$alamat','$id_seller')";
                                                    $sql_need = mysqli_query($conn,"SELECT * FROM item WHERE item_id='$product_code'");
                                                    $item = mysqli_fetch_array($sql_need);
                                                    $ttl_sold = $item['penjualan'];
                                                    $ttl_sold = $ttl_sold + $kuantitas;
                                                    mysqli_query($conn, "UPDATE item SET penjualan = '$ttl_sold' WHERE item_id = '$product_code'");
                                                    $i=$i+1;
                                                }
        $grand_total = $total + $shipping_cost; //grand total including shipping cost
		                                        $shipping_cost = ($shipping_cost)?''. sprintf("%d", $shipping_cost).'<br />':'';
                                            }
    unset($_SESSION["cart_products"]);

    while($i--){

        mysqli_multi_query($conn, $sql_item[$i]) ;
    }
    $checker=mysqli_query($conn, $sql_data);
    
 if ($checker){
        do{
            if (($checker = mysqli_store_result($conn)) === false && mysqli_error($conn) != ''){
                echo "Query Failed".mysqli_error($conn);
            }
        }while (mysqli_more_results($conn)&&mysqli_next_result($conn));
    

		$_SESSION['id'] = $id_user;
		$_SESSION['status'] = "User";
?>
    <script language="javascript">
        alert("Successful");
    </script>
    <script>
       document.location.href='../landing-page.php';
    </script>
    <?php
	}
	else{
?>
    <script language="javascript">
        alert("Error has occured");
    </script>

    <?php
	}
	mysqli_close($conn);
?>