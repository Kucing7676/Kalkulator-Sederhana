<?php
    echo "<h1 align=center>Hasil Luas Tabung!</h1>";
    echo "<br>";
    $n = $_GET['n'];
    $d = $_GET['d'];
    $t = $_GET['t'];
    if(isset($n, $d, $t)){
        $r = $d/2;
        $luas = 22/7 * ($r**2) * $t;
        echo "<center><h3>Luas tabung ".$n." dengan diameter ".$d." dan tinggi ".$t." adalah ".$luas." satuan luas.</h3></center>";
    }
?>