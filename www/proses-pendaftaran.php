<?php

$kon = mysqli_connect('db', 'user', 'test', 'pendaftaran_siswa');

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];
	
	// buat query
	$sql = "INSERT INTO calon_siswa SET
			id = '$id', 
			nama = '$nama', 
			alamat = '$alamat', 
			jenis_kelamin = '$jk', 
			agama = '$agama',
			sekolah_asal = '$sekolah'";
	$query = mysqli_query($kon, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('location: index.php');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('location: index.php');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
