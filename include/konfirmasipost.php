<?php 
   if (isset($_SESSION['id_user'])) {
      $id_user = $_SESSION['id_user'];
   }
   $caption = $_POST['caption'];
   $lokasi_file = $_FILES['foto']['tmp_name'];
   $nama_file = $_FILES['foto']['name'];
   $direktori = 'foto/'.$nama_file;
 
   if(empty($caption)){
	header("Location:index.php?include=posting&notif=tambahkosong&jenis=caption");
   }else if(!move_uploaded_file($lokasi_file,$direktori)){
      header("Location:index.php?include=posting&notif=tambahkosong&jenis=foto");
    }else{   
	$sql = "INSERT INTO `post` (`id_user`,`foto`,`caption`) VALUES ('$id_user','$nama_file','$caption')";
      //echo $sql;
	mysqli_query($koneksi,$sql);
    header("Location:index.php?include=home&notif=tambahberhasil");
    }
?>