<?php
session_start();
include('../koneksi/koneksi.php');
if (isset($_SESSION['kode_projek'])) {
  $kode_projek = $_SESSION[0];
  $pelanggan = $_POST[1];
  $kode_domisili = $_POST[2];
  $kode_industri = $_POST[3];
  $kode_produk = $_POST[4];
  $instagram = $_POST[5];
  $facebook = $_POST[6];
  $nama_perwakilan = $_POST[7];
  $wa_perwakilan = $_POST[8];
  $kode_status = $_POST[9];
  $harga = $_POST[10];

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
