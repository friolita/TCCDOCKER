<?php

$kon = mysqli_connect('db', 'user', 'test', 'pendaftaran_siswa');

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];
	
	// buat query update
	$sql = "UPDATE calon_mahasiswa SET
			nama = '$nama', 
			alamat = '$alamat', 
			jenis_kelamin = '$jk', 
			agama = '$agama',
			sekolah_asal = '$sekolah'
			WHERE id = '$id'";
	$query = mysqli_query($kon, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('location: list-siswa.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
