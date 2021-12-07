	<?php
	$koneksi = mysqli_connect("localhost","root","","sistem_manajemen");
	// cek koneksi
	if (!$koneksi){
    	die("Error koneksi: " . mysqli_connect_errno()); 
    }
    ?>