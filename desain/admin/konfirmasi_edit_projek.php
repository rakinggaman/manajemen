<?php
session_start();
include('../koneksi/koneksi.php');
if (isset($_SESSION['kode_projek'])) {
  $kode_projek = $_SESSION['kode_projek'];
  $pelanggan = $_POST['pelanggan'];
  $kode_domisili = $_POST['domisili'];
  $kode_industri = $_POST['industri'];
  $kode_produk = $_POST['produk'];
  $instagram = $_POST['instagram'];
  $facebook = $_POST['facebook'];
  $nama_perwakilan = $_POST['nama-perwakilan'];
  $wa_perwakilan = $_POST['wa'];
  $kode_status = $_POST['status'];
  $harga = $_POST['harga'];

  if (empty($kode_projek)) {
    header("Location:edit_project.php?data=" . $kode_projek . "&notif=editkosong");
  } else if (empty($pelanggan)) {
    header("Location:edit_project.php?data=" . $pelanggan . "&notif=editkosong");
  } else if (empty($kode_domisili)) {
    header("Location:edit_project.php?data=" . $kode_domisili . "&notif=editkosong");
  } else if (empty($kode_industri)) {
    header("Location:edit_project.php?data=" . $kode_industri . "&notif=editkosong");
  } elseif (empty($kode_produk)) {
    header("Location:edit_project.php?data=" . $kode_produk . "&notif=editkosong");
  } elseif (empty($instagram)) {
    header("Location:edit_project.php?data=" . $instagram . "&notif=editkosong");
  } elseif (empty($facebook)) {
    header("Location:edit_project.php?data=" . $facebook . "&notif=editkosong");
  } else if (empty($nama_perwakilan)) {
    header("Location:edit_project.php?data=" . $nama_perwakilan . "&notif=editkosong");
  } else if (empty($harga)) {
    header("Location:edit_project.php?data=" . $harga . "&notif=editkosong");
  } else {
    $sql = "UPDATE `projek` set `pelanggan`='$pelanggan', `kode_domisili`='$kode_domisili', `kode_industri`='$kode_industri', `kode_produk`='$kode_produk', `instagram`='$instagram', `facebook`='$facebook', `nama_perwakilan`='$nama_perwakilan', `harga`='$harga' WHERE `kode_projek`='$kode_projek'";
    mysqli_query($koneksi, $sql);
    header("Location:projek.php?notif=editberhasil");
  }
}
