<?php
	include"connect.php";
  $id = $_POST['item_id'];

  $nama = $_POST['nama_item'];
	$deskripsi = $_POST['deskripsi_item'];
	$qty = $_POST['quantity'];
	$harga = $_POST['harga'];
	$berat = $_POST['berat'];
	$diskon = $_POST['diskon'];
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
//insert into buat nambahin entitas ke data base
//php gak ada tipe varibel ,, jadi enak aja masuk masukin
	$sql_ganti = "UPDATE item SET quantity = '$qty',nama_item = '$nama', harga = '$harga', diskon = '$diskon',berat = '$berat',deskripsi_item= '$deskripsi',gambar_item='$file_fmt',kategori='$kategori' WHERE item_id = '$id'";
  $ok = 0;
}

  
	if (mysqli_query($conn, $sql_ganti)){
?>
		<script language="javascript">alert("Edit Successful");</script>
		<script>document.location.href='../my-sales.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Edit Failed");</script>
<script>document.location.href='../my-sales.php';</script>
<?php
	}
	mysqli_close($conn); //untuk nutup koneksi,, agar abis ngirim data gak ada script lagi masuk ke data base
?>
