<?php
	include "connect.php";
    $id_user = $_SESSION['id'];
	$email = $_POST['email'];
	$business_name = $_POST['business_name'];
	$business_address = $_POST['business_address'];
	$country = $_POST['country'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$phone = $_POST['phone'];

    $file_fmt  =time().$id_user.'.jpg';
    $file='legal_id';
    $dir='../images/legal_id/';
    UploadImageResize($file_fmt,$file,$dir);

    function UploadImageResize($file_fmt,$file,$dir){
        //direktori gambar
        $vdir_upload = $dir;
        $vfile_upload = $vdir_upload.$_FILES[''.$file.'']["name"];
        //Simpan gambar dalam ukuran sebenarnya
        move_uploaded_file($_FILES[''.$file.'']["tmp_name"], $dir.$file_fmt);
    }

    $file='buku_tab';
    $dir='../images/buku_tabungan/';
    UploadImageResize($file_fmt,$file,$dir);


    $sql_buat = "INSERT INTO seller(AI,id_user,bs_name,bs_address,email,cty_state,ZIP,notelp,upload_files,approval)VALUE('','$id_user','$business_name','$business_address','$email','$country,$state','$zip','$phone','$file_fmt','0')";

	if (mysqli_query($conn, $sql_buat)){

?>
		<script language="javascript">alert("Register As Seller Successful. \nPlease wait 24 hours for approval from admin.");</script>
        <script>document.location.href='../become-seller.php';</script>
<?php
	}
	else{
?>
		<script language="javascript">alert("Register Failed. Error Occured! \nThis error might caused when you register as seller twice.");</script>
		<script>document.location.href='../become-seller.php';</script>
<?php
	}
	mysqli_close($conn);
?>
