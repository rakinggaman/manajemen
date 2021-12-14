	<?php
	session_start();
	include('../koneksi/koneksi.php');
	if(isset($_SESSION['id_user'])){
	$id_user = $_SESSION['id_user'];
	$nama = $_POST['nama'];
	$email = $_POST['email']; 
	if(empty($nama)){
	header("Location:edit_profil.php?notif=editkosong&jenis=nama");
	}else if(empty($email)){
	header("Location:edit_profil.php?notif=editkosong&jenis=email");
	}else{
	$sql = "update `akun` set `nama`='$nama', `email`='$email'
	where `id_user`='$id_user'";
	mysqli_query($koneksi,$sql);
	header("Location:profil.php?notif=editberhasil");
 }
 }  
  ?>
