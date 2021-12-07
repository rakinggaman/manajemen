<?php
	session_start();
	include('../koneksi/koneksi.php');
	if(isset($_SESSION['kode_produk'])){
	$kode_produk = $_SESSION['kode_produk'];
    $produk = $_POST['produk'];
    if(empty($produk)){ header("Location:edit_produk.php?data=".$kode_produk." &notif=editkosong");
        }else{
    $sql = "update `produk` set `produk`='$produk' where `kode_produk`='$kode_produk'"; mysqli_query($koneksi,$sql);
    header("Location:produk.php?notif=editberhasil");
        }
    }
?>