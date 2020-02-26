<?php
$a=$_POST['kelashotel'];
if ($a >= 150000 && $a <250000) {
	$b = "kelas hotel adalah melati";
}elseif ($a >=250000 && $a<500000) {
	$b = "kelas hotel deluxe";
}elseif ($a >=500000 && $a<1000000) {
	$b = "Kelas hotel superior";
}elseif ($a >= 1000000 && $a<5000000) {
	$b = "kelas hotel president";
}else{
	$b = "kelas hotel belum tersedia";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Penentuan Kelas Hotel</title>
</head>
<body>
	<table border="1">
		<tr>
			<body>
				<th><?php echo $b; ?></th>
			</body>
		</tr>
	</table>

</body>
</html>