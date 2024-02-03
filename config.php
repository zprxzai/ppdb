<?php
$server = 'localhost';
$userdb = 'root';
$passdb = '';
$namadb = 'ppdb_pesat';
$db = mysqli_connect($server, $userdb, $passdb, $namadb);
if(!$db){
    die("gagal terhubung ke database:" . mysqli_connect_error());
} 
