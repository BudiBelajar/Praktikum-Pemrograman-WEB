<?php
define("phi", 3.14);
$a=$_POST['jari'];
$b=phi * $a * $a;
?>
<!DOCTYPE html>
<html>
<head>
	<title>hasil keliling lingkaran</title>
</head>
<body>
	<table border="1">
		<tr>
			<thead>
				<th>Nilai jari-jari</th>
				<th>Nilai phi</th>
				<th>Hasil Keliling Lingkaran</th>
			</thead>
		</tr>
		<tr>
			<body>
				<th><?php echo $a; ?></th>
				<th><?php echo phi; ?></th>
				<th><?php echo $b; ?></th>
			</body>
		</tr>
	</table>

</body>
</html>