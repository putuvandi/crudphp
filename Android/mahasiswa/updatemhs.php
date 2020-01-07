<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	
	// import file koneksi
	require_once('koneksi.php');
	
	// query
	$sql = "UPDATE tablecoba SET nama_mhs='$name', alamat_mhs='$address' WHERE id_mhs=$id;";
	
	// mengupdate database
	if (mysqli_query($conn,$sql)) {
		echo 'Berhasil update data mahasiswa';
	} else {
		echo 'Gagal update data mahasiswa';
	}
	mysqli_close($conn);
}
?>