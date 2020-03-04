<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Data MySQL</title>
</head>
<body>
<h1>Demo koneksi database MySQL</h1>
<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "matakuliah";
$koneksi = mysqli_connect($host,$username,$password,$database);
if($koneksi){
	echo "OK";
}else{
	echo "Server not connected";
}
?>
</body>
</body>
</html>