<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
</head>
<body>
    <h2>Data Pasien</h2>
    
    <h4>Tambah Pasien</h4>
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
        include 'fungsiview.php';
        ?>

    </table>
</body>
</html>