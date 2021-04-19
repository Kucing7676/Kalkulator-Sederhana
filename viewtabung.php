<?php
    $namaFile = "datatabung.dat";
    $myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");

    echo "<center>";
    echo "<h1>DATA UKURAN TABUNG</h1>";
    echo "<table border='1'>";
    echo "<tr align=center>
    <td>NAMA TABUNG</td>
    <td>DIAMETER</td>
    <td>TINGGI</td>
    <td>LUAS</td>
    </tr>";
    while(!feof($myfile)) {
        $isi = fgets($myfile);
        $pisah = explode(",", $isi);
        $i = 0;
        echo "<tr>";
        while ($i < count($pisah)){
            echo "<td align=center>$pisah[$i]</td>";
            $i++;
        }
        echo "<td align=center><a href=http://localhost/Pemrograman%20Web/Tugas%205/hitungluas.php?n=$pisah[0]&d=$pisah[1]&t=$pisah[2]>view</a></td>";
        echo "</tr>";
    }