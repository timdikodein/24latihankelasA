<?php
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
            echo "<td> <a> Edit </a> || <a> Hapus </a> </td>";
        }
        ?>