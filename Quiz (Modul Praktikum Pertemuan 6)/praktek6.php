<?php
    echo "<br>";
    echo "=================== <br>";
    echo "<br>";
    echo "NIP : 100111 <br>";
    echo "Nama Pegawai : Fitriyani <br>";
    echo "<br>";
    echo "=================== <br>";
    echo "<br>";   

    $gajipokok = 2000000;
    $bonus = 500000;
    $tunjangan = 0.05 * $gajipokok;
    $pajak = 0.1 * $gajipokok;
    $gaji = $gajipokok + $bonus + $tunjangan - $pajak;

    echo "gaji Pokok = {$gajipokok}<br>";
    echo "Bonus = {$bonus}<br>";
    echo "Tunjangan = {$tunjangan}<br>";
    echo "Pajak = {$pajak}<br><br>";
    echo "<br>";
    echo "=================== <br>";
    echo "<br>";   
    echo "Gaji yang harus dibayar = {$gaji}<br>";
?>