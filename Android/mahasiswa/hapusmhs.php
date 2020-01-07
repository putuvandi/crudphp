<?php

// mendapatkan nilai id
$id = $_GET['id'];

// import file koneksi
require_once('koneksi.php');

// membuat sql query
$sql = "DELETE FROM tablecoba WHERE id_mhs=$id;";

// menghapus nilai pada database
if (mysqli_query($conn,$sql)) {
	echo 'Berhasil menghapus mahasiswa';
} else {
	echo 'Gagal menghapus mahasiswa';
}

mysqli_close($conn);
?>