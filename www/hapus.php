<?php

$kon = mysqli_connect('db', 'user', 'test', 'pendaftaran_siswa');

if( isset($_GET['id']) ){
	
	// ambil id dari query string
	$id = $_GET['id'];
	
	// buat query hapus
	$sql = "DELETE FROM calon_siswa WHERE id=$id";
	$query = mysqli_query($kon, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('location: list-siswa.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>
