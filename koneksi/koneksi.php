<?php
$koneksi = mysqli_connect("localhost","root","","tes_sevima");
// cek koneksi
if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?>