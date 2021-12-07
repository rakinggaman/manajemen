<?php
	session_start();
	include('../koneksi/koneksi.php');
	if(isset($_SESSION['kode_domisili'])){
	$kode_domisili = $_SESSION['domisili'];
    $domisili = $_POST['domisili'];
    if(empty($domisili)){ header("Location:edit_domisili.php?data=".$kode_domisili." &notif=editkosong");
        }else{
    $sql = "update `domisili` set `domisili`='$domisili' where `kode_domisili`='$kode_domisili'"; mysqli_query($koneksi,$sql);
    header("Location:domisili.php?notif=editberhasil");
        }
    }
?>