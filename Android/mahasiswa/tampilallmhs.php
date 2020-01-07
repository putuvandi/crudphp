<?php

// import file koneksi
require_once('koneksi.php');

// query
$sql = "SELECT * FROM tablecoba";

// mendapatkan hasil
$r = mysqli_query($conn,$sql);

// membuat array kosong
$result = array();

while($row = mysqli_fetch_array($r)) {
	// memasukkan id dan nama ke array kosong yg dibuat
	array_push($result,array(
		"id"=>$row['id_mhs'],
		"name"=>$row['nama_mhs']
	));
}

// menampilkan array dalam format JSON
echo json_encode(array('result'=>$result));

mysqli_close($conn);
?>