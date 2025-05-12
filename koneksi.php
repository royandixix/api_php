<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_makanan";
    $koneksi = new mysqli($host, $user, $pass, $db);
    
    if($koneksi->connect_error){die("koneksi gagal: " . $koneksi->connect_error); }
?>