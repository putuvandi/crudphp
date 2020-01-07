<?php

// mendapatkan nilai dari variable id mahasiswa yg ingin ditampilkan 
$id = $_GET['id'];

// import file koneksi
require_once('koneksi.php');

// query
$sql = "SELECT * FROM tablecoba WHERE id_mhs=$id;";

// mendapatkan hasil
$r = mysqli_query($conn,$sql);

// memasukkan hasil ke dalam array
$result = array();
$mhs = mysqli_fetch_array($r);
array_push($result,array(
	"id"=>$mhs['id_mhs'],
	"name"=>$mhs['nama_mhs'],
	"address"=>$mhs['alamat_mhs']
));

// menampilkan dalam format JSON
echo json_encode(array('result'=>$result));

mysqli_close($conn);
?>