<?php 
    include('../koneksi/koneksi.php');

    $pelanggan = $_POST['pelanggan'];
	$domisili = $_POST['domisili'];
	$industri = $_POST['industri']; 
    $produk = $_POST['produk']; 
    $instagram = $_POST['instagram']; 
    $facebook = $_POST['facebook']; 
    $nama = $_POST['nama']; 
    $wa = $_POST['wa']; 
    $status = $_POST['status']; 
    $harga = $_POST['harga']; 

	if(empty($pelanggan)){
		header("Location:tambah_projek.php?notif=tambahkosong&data=Pelanggan");
	}else if(empty($domisili)){
		header("Location:tambah_projek.php?notif=tambahkosong&data=Domisili");
	}else if(empty($industri)){
		header("Location:tambah_projek.php?notif=tambahkosong&data=industri");
	}else if(empty($produk)){
		header("Location:tambah_projek.php?notif=tambahkosong&data=Produk");
	}else if(empty($instagram)){
		header("Location:tambah_projek.php?notif=tambahkosong&data=instagram");
	}else if(empty($facebook)){
		header("Location:tambah_projek.php?notif=tambahkosong&data=Facebook");
	}else{
		$sql = "INSERT INTO `projek` (`pelanggan`, `kode_domisili`, `kode_industri`, `kode_produk`, `instagram`, `facebook`, `nama_perwakilan`, `wa_perwakilan`, `kode_status`, `harga_projek`) 
        VALUES ('$pelanggan', '$domisili', '$industri', '$produk', '$instagram', '$facebook', '$nama', '$wa', '$status', '$harga')";
		mysqli_query($koneksi,$sql);

        header("Location:projek.php?notif=tambahberhasil");	
	}
?>