<?php
$a=$_POST['nama'];
$b=$_POST['alamat'];
$c=$_POST['jk'];
$d=$_POST['email'];
$e=$_POST['var_a'];
$f=$_POST['var_b'];
$h=$_POST['jawab'];
$g= $e * $f;

if ($h == $g) {
	# code...

?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM RESULT INPUT DATA</title>
</head>
<body>
	<table border="1">
		<tr>
			<thead>
				<th>Nama</th>
				<th>alamat</th>
				<th>Email</th>
				<th>jenis kelamin</th>
				<th>Jawaban</th>
			</thead>
		</tr>
		<tr>
			<body>
				<th><?php echo $a; ?></th>
				<th><?php echo $b; ?></th>
				<th><?php echo $c; ?></th>
				<th><?php echo $d; ?></th>
				<th><?php echo $h; ?></th>
			</body>
		</tr>
	</table>

</body>
</html>

<?php
}else{
	?>
<script type="text/javascript">
	alert("jawaban anda salah");
	history.back();
</script>
<?php

}?>
