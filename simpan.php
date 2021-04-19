<?php
    $namaFile = "datamhs.dat";
    $myfile = fopen($namaFile, "a") or die("Tidak bisa buka file!");
    $input =  $_POST['nim'].' | '.$_POST['nama'].' | '.$_POST['tgllhr'].' | '.$_POST['tmptlhr']."\n";
    if(isset($_POST['submit'])){
        fwrite($myfile, $input);
        echo "<center><h1>Data Telah Tersimpan!<h1><center>";
    }
    fclose($myfile);
?>