<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($connec,"DELETE FROM user1 WHERE id='$id'")or die(mysql_error());

header("location:index.php?pesan=hapus");
?>
