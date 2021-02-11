database.
<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
mysqli_query($connec, "INSERT INTO user1 VALUES ('','$nama','$alamat','$pekerjaan')");
header("location:index.php?pesan=input");
?>
	