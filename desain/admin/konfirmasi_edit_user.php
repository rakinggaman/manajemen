<?php
	session_start();
	include('../koneksi/koneksi.php');
	if(isset($_SESSION['id_user'])){
        $id_user = $_SESSION['id_user'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];

        // if(empty($id_user)){ 
        //     header("Location:edit_user.php?data=".$id_user." &notif=editkosong");
        }if(empty($nama)){
            header("Location:edit_user.php?include=edit_user&data=".$nama."&notif=editkosong&jenis=nama");
        }else if(empty($email)){
            header("Location:edit_user.php?include=edit_user&data=".$email."&notif=editkosong&jenis=email");
        }else if(empty($username)){
            header("Location:edit_user.php?include=edit_user&data=".$username."&notif=editkosong&jenis=username");
        }
        else if(empty($password)){
            header("Location:edit_user.php?include=edit_user&data=".$password."&notif=editkosong&jenis=password");
        // }else if(empty($level)){
        //     header("Location:edit_user.php?include=edit_user&data=".$level."&notif=editkosong&jenis=level");
        }else{
            $sql = "update `akun` set `nama`='$nama', `email`='$email', `username`='$username', `password`='$password', `level`='$level' where `id_user`='$id_user'"; 
            mysqli_query($koneksi, $sql);
            header("Location:user.php?notif=editberhasil");
        }
    // }
?>