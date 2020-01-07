<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//mendapatkan nilai variabel
	$name = $_POST['name'];
	$address = $_POST['address'];
	
	// query
	$sql = "INSERT INTO tablecoba(nama_mhs,alamat_mhs) VALUES ('$name','$address')";
	
	//import file koneksi database
	require_once('koneksi.php');
	
	//eksekusi query
	if (mysqli_query($conn,$sql)) {
		echo 'Berhasil menambahkan pegawai';
	} else {
		echo 'Gagal menambahkan pegawai';
	}
	mysqli_close($conn);
}

?>