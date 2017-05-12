<?php
	include"connect.php";
  $id = $_POST['item_id'];

  $nama = $_POST['nama_item'];
	$deskripsi = $_POST['deskripsi_item'];
	$qty = $_POST['quantity'];
	$harga = $_POST['harga'];
	$berat = $_POST['berat'];
	$diskon = $_POST['diskon'];

  $file_fmt  =time().$id.'.jpg';
	$file='gambar_item';
	$dir='../images/';
	UploadImageResize($file_fmt,$file,$dir);

	function UploadImageResize($file_fmt,$file,$dir){
		//direktori gambar
		$vdir_upload = $dir;
		$vfile_upload = $vdir_upload.$_FILES[''.$file.'']["name"];
		//Simpan gambar dalam ukuran sebenarnya
		move_uploaded_file($_FILES[''.$file.'']["tmp_name"], $dir.$file_fmt);
	}
//insert into buat nambahin entitas ke data base
//php gak ada tipe varibel ,, jadi enak aja masuk masukin
	$sql_ganti = "UPDATE item SET quantity = '$qty',nama_item = '$nama', harga = '$harga', diskon = '$diskon',berat = '$berat',deskripsi_item= '$deskripsi',gambar_item='$file_fmt' WHERE item_id = '$id'";
	if (mysqli_query($conn, $sql_ganti)){
?>
		<script language="javascript">alert("Edit Successful");</script>   //skrip javascript untuk alert sderhana
		<script>document.location.href='index.php';</script> //untuk nge link
<?php
	}
	else{
?>
		<script language="javascript">alert("Edit Failed");</script>

<?php
	}
	mysqli_close($conn); //untuk nutup koneksi,, agar abis ngirim data gak ada script lagi masuk ke data base
?>
