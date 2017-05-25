<?php
    $currency = 'Rp ';
    $shipping_cost      = 1000; //shipping cost
    $taxes              = array( //List your Taxes percent here.
                            'VAT' => 12, 
                            'Service Tax' => 5
                            );	

	$conn = mysqli_connect('localhost', 'root', '', 'lapakikan')
	or die ("Connection Failed".mysqli_error());
    $mysqli = new mysqli('localhost', 'root', '', 'lapakikan');

    session_start();
    if(!(isset($_SESSION['id']))) {
		$_SESSION['status'] = "nouser";
	}
    

    
?>
