<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border = "1">
	<tr>
		<thead>
			<td>Id_bukutamu.</td>
			<td>Nama</td>
			<td>Email</td>
			<td>comentar</td>
		</thead>
	</tr>
	<tbody>
		<?php
		$id_bukutamu =1;
		include "koneksi_tugas.php";
		$a = "SELECT * FROM bukutamu";
		$b = $koneksi->query($a);
		while ($c=$b ->fetch_array()) { ?>
			<tr>
				<th><?php echo $id_bukutamu++; ?></th>
				<th><?php echo $c['nama']; ?></th>
				<th><?php echo $c['Email']; ?></th>
				<th><?php echo $c['comentar']; ?></th>
			</tr>
			<?php
		}
		?>
	</tbody>
</table>
</body>
</html>