<?php
	include"modules/connect.php";
	if($_SESSION['status'] == "User"){
	$id		= $_SESSION['id'];
}
	$nama = $_POST['nama_item'];
	$deskripsi_item	= $_POST['deskripsi_item'];
	$harga		= $_POST['harga'];

	$file_fmt  =time().$id.'.jpg';
	$file='gambar_item';
	$dir='images/';
	UploadImageResize($file_fmt,$file,$dir);

	function UploadImageResize($file_fmt,$file,$dir){
		//direktori gambar
		$vdir_upload = $dir;
		$vfile_upload = $vdir_upload.$_FILES[''.$file.'']["name"];
		//Simpan gambar dalam ukuran sebenarnya
		move_uploaded_file($_FILES[''.$file.'']["tmp_name"], $dir.$file_fmt);
	}

	$input = "INSERT INTO item(item_id, nama_item, deskripsi_item, quantity, harga, berat, diskon, penjualan, fresh, pengunjung, gambar_item) VALUES('','$nama','$deskripsi_item','','$harga','','','','','','$file_fmt')";

	if (mysqli_query($conn, $input)){
?>
		<script language="javascript">alert("Register Successful");</script>
		<script>document.location.href='post.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Register Failed");</script>
		<script>document.location.href='../post.php';</script>
<?php
	}
	mysqli_close($conn);
?>
?>
