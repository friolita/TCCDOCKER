<?php

$server = "localhost";
$username = "root";
$password = "";
$nama_database = "pendaftaran_mahasiswa";

$db = mysqli_connect($server, $username, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
