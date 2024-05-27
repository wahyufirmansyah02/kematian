<?php
    $host   = 'localhost';
    $user   = 'root';
    $pass   = '';
    $db     = 'catatan_kematian';

    $conn = mysqli_connect($host, $user, $pass, $db);
    
    if ($conn){
        echo "koneksi berhasil";
    }
?>