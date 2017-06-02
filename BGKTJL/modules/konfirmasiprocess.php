<?php
	include"connect.php";
	if($_SESSION['status'] == "User"){
	$id		= $_SESSION['id'];
}
    $order_id=$_POST['order_id'];
	$nama = $_POST['atasnama'];
	$bank = $_POST['bank'];
	$banyak = $_POST['jumlahyangdikirim'];
  $file_fmt  =time().$id.'.jpg';
    $allowed_extensions = array( "image/png", "image/jpg","image/jpeg" );
    $file_fmt  =time().$id.'.jpg';
	$file='gambar_item';
	$dir='../images/bukti_pembayaran';
	UploadImageResize($file_fmt,$file,$dir);

	function UploadImageResize($file_fmt,$file,$dir){
		//direktori gambar
		$vdir_upload = $dir;
		$vfile_upload = $vdir_upload.$_FILES[''.$file.'']["name"];
		//Simpan gambar dalam ukuran sebenarnya
		
	}
 if ( in_array( $_FILES[ "gambar_item" ][ "type" ], $allowed_extensions ) ){
     move_uploaded_file($_FILES[''.$file.'']["tmp_name"], $dir.$file_fmt);
	$input = "INSERT INTO pembayaran(AI,order_id,atasnama,bank,banyak,gambar) VALUES('','$order_id','$nama','$bank','$banyak','$file_fmt')";
 }
	if (mysqli_query($conn, $input)){
?>
		<script language="javascript">alert("Konfirmasi Segera Diproses");</script>
		<script>document.location.href='../pesenan.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Error has occured. Konfirmasi Gagal");</script>

<?php
	}
	mysqli_close($conn);
?>

