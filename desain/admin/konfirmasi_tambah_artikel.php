<?php
    include('../koneksi/koneksi.php');
	$judul = $_POST['judul'];
    $gambar = $_POST['gambar'];
    $artikel = $_POST['artikel'];

	if(empty($artikel)){
	header("Location:tambah_artikel.php?notif=tambahkosong");
	}else if(empty($judul)){
    header("Location:tambah_artikel.php?notif=tambahkosong");
    }else{
	$sql = "insert into `artikel` (`judul`, `gambar`, `artikel`)
	values ('$judul', '$gambar', '$artikel')";
	mysqli_query($koneksi,$sql);
	header("Location:artikel.php?notif=tambahberhasil");
 }

 ?>
