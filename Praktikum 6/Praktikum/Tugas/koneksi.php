<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "18650056";
	$koneksi = mysqli_connect($host, $username, $password, $database);
	if($koneksi){
		echo "terhubung";
	} else {
		echo "tidak terhubung";
	}
	?>
	