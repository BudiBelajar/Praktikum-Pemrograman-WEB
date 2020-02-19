<?php
$a=$_POST['nilai1'];
$b=$_POST['nilai2'];
$c=$a/$b;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hasil Pembagian</title>
</head>
<body>
	<table border="1">
		<tr>
			<thead>
				<th>Nilai1</th>
				<th>Nilai2</th>
				<th>Hasil</th>
			</thead>
		</tr>
		<tr>
			<tbody>
				<th><?php echo $a; ?></th>
				<th><?php echo $b; ?></th>
				<th><?php echo $c; ?></th>
			</tbody>
		</tr>
	</table>

</body>
</html>