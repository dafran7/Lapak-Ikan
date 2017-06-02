<?php
	include"connect.php";
	if($_SESSION['status'] == "User"){
	$id		= $_SESSION['id'];
}
	$nama = $_POST['nama_item'];
	$diskon = $_POST['diskon'];
	$berat = $_POST['berat'];
	$quantity = $_POST['quantity'];
	$deskripsi_item	= $_POST['deskripsi_item'];
	$harga		= $_POST['harga'];
    $kategori		= $_POST['kategori'];
    $allowed_extensions = array( "image/png", "image/jpg","image/jpeg" );
    $file_fmt  =time().$id.'.jpg';
	$file='gambar_item';
	$dir='../images/';
	UploadImageResize($file_fmt,$file,$dir);

	function UploadImageResize($file_fmt,$file,$dir){
		//direktori gambar
		$vdir_upload = $dir;
		$vfile_upload = $vdir_upload.$_FILES[''.$file.'']["name"];
		//Simpan gambar dalam ukuran sebenarnya
		
	}
    if ( in_array( $_FILES[ "gambar_item" ][ "type" ], $allowed_extensions ) ){
  move_uploaded_file($_FILES[''.$file.'']["tmp_name"], $dir.$file_fmt);
	$input = "INSERT INTO item(item_id, nama_item, deskripsi_item, quantity, harga, berat, diskon, penjualan, pengunjung, gambar_item,kategori,id_user) VALUES('','$nama','$deskripsi_item','$quantity','$harga','$berat','$diskon','','','$file_fmt','$kategori','$id')";
  $ok = 0;
}
  

	if (mysqli_query($conn, $input)){
?>
		<script language="javascript">alert("Item successfully been added");</script>
		<script>document.location.href='../my-sales.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Error has occured. Add item failed.\nPlease try again later.");</script>
		<script>document.location.href='../add-list.php';</script>

<?php
	}
	mysqli_close($conn);
?>

