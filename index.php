<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
</head>
<body>
    <h2>Data Pasien</h2>
    
    <h4> <a href="tambah.php"> Tambah Pasien </a></h4>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nomor RM</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>No.Hp</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 0;
        $data = mysqli_query($koneksi, "select * from tbpasien");
        while ($pasien = mysqli_fetch_array($data)){
            echo "<tr>";
            $no++;
            echo "<td>" .$no. "</td>";
            echo "<td>" .$pasien["norm"]."</td>";
            echo "<td>" .$pasien["namapasien"]."</td>";
            echo "<td>" .$pasien["jk"]."</td>";
            echo "<td>" .$pasien["agama"]."</td>";
            echo "<td>" .$pasien["alamat"]."</td>";
            echo "<td>" .$pasien["nohp"]."</td>";
            echo "<td> <a> Edit </a> || <a href='hapus.php?idpasien=$pasien[idpasien]'> Hapus </a> </td>";
        }
        ?>

    </table>
</body>
</html>