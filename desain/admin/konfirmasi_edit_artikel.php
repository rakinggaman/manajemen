<?php
	session_start();
	include('../koneksi/koneksi.php');
	if(isset($_SESSION['kode_artikel'])){
	$kode_artikel = $_SESSION['kode_artikel'];
    $judul = $_POST['judul'];
    $gambar = $_POST['gambar'];
    $artikel = $_POST['artikel'];


    if(empty($kode_artikel)){ 
        header("Location:edit_artikel.php?data=".$kode_artikel." &notif=editkosong");
    }else if(empty($judul)){
		header("Location:edit_artikel.php?include=edit_pengguna&data=".$kode_artikel."&notif=editkosong&jenis=judul");
	}else if(empty($gambar)){
		header("Location:edit_artikel.php?include=edit_pengguna&data=".$kode_artikel."&notif=editkosong&jenis=gambar");
	}else if(empty($artikel)){
		header("Location:edit_artikel.php?include=edit_pengguna&data=".$kode_artikel."&notif=editkosong&jenis=artikel");
	}else{
    $sql = "update `artikel` set `judul`='$judul', `gambar`='$gambar', `artikel`='$artikel' where `kode_artikel`='$kode_artikel'"; 
    mysqli_query($koneksi, $sql);
    header("Location:artikel.php?notif=editberhasil");
        }
    }
?>