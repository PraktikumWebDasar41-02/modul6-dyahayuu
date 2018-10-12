<?php

	session_start();
	$koneksi = mysqli_connect('localhost','root','','jurnall6');

	$sql = "SELECT * FROM tb_jurnal6";
	$query = mysqli_query($koneksi, $sql);
	$row = mysqli_fetch_array($query);
	echo "<pre>";
	echo "<h2> Data Diri </h2>";
	echo "Nim		: ".$row['nim']."<br>";
	echo "Nama 		: ".$row['nama']."<br>";
	echo "Kelas 		: ".$row['kelas']."<br>"
	echo "Jenis Kelamin 	: ".$row['jeniskelamin']."<br>";
	echo "Hobi		: ".$row['hobi']."<br>";
	echo "Fakultas	: ".$row['Fakultas']."<br>";
	echo "Alamat 	: ".$row['alamat']."<br>";
	echo "</pre>";
	session_destroy();
?>

