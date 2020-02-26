<?php
$a=$_POST['diskonpenjualan'];
if ($a>=100000) {
	$b = $a * (10/100);
	$c = $a - $b;
}elseif ($a <100000) {
	$b = $a * (5/100);
	$c = $a - $b;
}
?>
<html>
<head>
	<title>Penjualan</title>
</head>
<body>
	<table border="1">
		<tr>
			<body>
				<th><?php echo $c; ?></th>
			</body>
		</tr>
	</table>

</body>
</html>