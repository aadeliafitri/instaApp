<?php 
   if (isset($_SESSION['id_user'])) {
      $id_user = $_SESSION['id_user'];
   }
   $comment = $_POST['comment'];
 
   if(empty($comment)){
	header("Location:index.php?include=&notif=tambahkosong&jenis=comment");
   }else{   
    if (isset($_GET['data'])) {
        $id_post = $_GET['data'];
        $sql = "INSERT INTO `komentar` 
            (`id_post`,`id_user`,`komentar`) VALUES ('$id_post','$id_user','$comment')";
            //echo $sql;
            mysqli_query($koneksi,$sql);
            // $id_berita = mysqli_insert_id($koneksi);
            header("Location:index.php?include=detail-post&data=$id_post");
        }
    }
?>