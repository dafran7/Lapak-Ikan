<?php
	include "connect.php";

	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
        $product_name = $cart_itm["nama_item"];
        $product_qty = $cart_itm;
        $product_price = $cart_itm["harga"];
        $product_code = $cart_itm["item_id"];
        $product_color = $cart_itm["product_color"];
		$subtotal = ($product_price * $product_qty["product_qty"]);
		$total = ($total + $subtotal);
	}
?>
		<script language="javascript">alert("Login Successful");</script>
		<script>document.location.href='../index.php';</script>
<?php
	}
	else{
?>

		<script language="javascript">alert("Login Failed");</script>

<?php
	}
	mysqli_close($conn);
?>
