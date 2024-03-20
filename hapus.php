<?php
include("koneksi.php");
$idpasien = $_GET['idpasien'];
$hapus = "DELETE FROM tbpasien WHERE idpasien = '$idpasien'";
//menjalankan query
mysqli_query($koneksi,$hapus);

//kembali ke halaman index
header("location:index.php");

?>