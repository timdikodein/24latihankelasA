<?php
//penghubung untuk ke dalam database
$koneksi = mysqli_connect("localhost","root","root","dbklinik");

//perintah untuk mengambil data dalam form yang akan di masukan ke database
if (isset($_POST["submit"])) {
    $norm = $_POST['norm'];
    $namapasien = $_POST['namapasien'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];

  
//proses pemasukan data ke dalam database
$simpan = "INSERT INTO tbpasien values (null, '$norm', '$namapasien', '$jk', '$agama', '$alamat', '$nohp')";
mysqli_query($koneksi,$simpan);

//agar kembali ke halaman awal / index
header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>
</head>
<body>
    <h2> Tambah Data Pasien</h2>
    <form action="" method="post">
    <table>
    <tr>
        <td> Id Pasien </td>
        <td> <input type="int" name="idpasien"  placeholder="Otomatis"</td>
    </tr>
    <tr>
        <td> Nomor RM Pasien</td>
        <td> <input type="text" name="norm" placeholder="Nomor RM Pasien" </td>
    </tr>
    <tr>
        <td> Nama Pasien</td>
        <td> <input type="text" name="namapasien" placeholder="Nama Lengkap Pasien" </td>
    </tr>
    <tr>
        <td> Jenis Kelamin </td>
        <td> <input type="text" name="jk" placeholder="Laki-Laki/Perempuan" </td>
    </tr>
    <tr>
        <td> Agama </td>
        <td> <input type="text" name="agama" </td>
    </tr>
    <tr>
        <td> Alamat </td>
        <td> <input type="text" name="alamat" </td>
    </tr>
    <tr>
        <td> Nomor Handphone </td>
        <td> <input type="text" name="nohp" </td>
    </tr>
    <tr>
        <td></td>
        <td> <input type="submit" name="submit" value="Simpan" </td>
    </tr>
    </table>

    </form>
</body>
</html>