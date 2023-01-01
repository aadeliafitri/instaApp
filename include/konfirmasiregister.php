<?php
    //akses file koneksi database
    // include('../koneksi/koneksi.php');
    if (isset($_POST['register'])) {
        $nama = $_POST['nama'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $username = mysqli_real_escape_string($koneksi, $user);
        $password = mysqli_real_escape_string($koneksi, MD5($pass));
        
        if(empty($nama)){
            header("Location:index.php?include=register&notif=tambahkosong");
        }else if(empty($user)){
            header("Location:index.php?include=register&notif=tambahkosong");
        }else if(empty($pass)){
            header("Location:index.php?include=register&notif=tambahkosong");
        }else{
            $sql = "insert into `user` (`nama`,`username`, `password`) values ('$nama', '$username', '$password')";
            mysqli_query($koneksi,$sql);
        header("Location:index.php");	
        }
    }
?>
