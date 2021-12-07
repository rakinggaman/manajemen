<?php
	session_start();
	include('../koneksi/koneksi.php');
	if(isset($_SESSION['kode_industri'])){
	$kode_industri = $_SESSION['kode_industri'];
    $industri = $_POST['industri'];
    if(empty($industri)){ header("Location:edit_industri.php?data=".$kode_industri." &notif=editkosong");
        }else{
    $sql = "update `industri` set `industri`='$industri' where `kode_industri`='$kode_industri'"; mysqli_query($koneksi,$sql);
    header("Location:industri.php?notif=editberhasil");
        }
    }
?>