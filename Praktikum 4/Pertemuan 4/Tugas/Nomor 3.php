<!DOCTYPE html>
<html>
<head>
	<title>INPUT PEMBUATAN FORM</title>
</head>
<body>
<form action="tugas3.php" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>

		<tr>
			<td>Alamat</td>
			<td><textarea name="alamat"></textarea></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="jk">
					<option value="L">Laki-laki</option>
					<option value="P">Perempuan</option>
				</select>
			</td>
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>

		<tr>
			<td>Hitung</td>
			<td><?php $a = rand(1,10); $b = rand (1,10);?>
			<input type="hidden" name="angka1" value="<?php echo $a; ?>">	
			<input type="hidden" name="angka2" value="<?php echo $b; ?>">	
			<?php echo $a; echo "*"; echo $b; ?>		
			</td>
		</tr>

		<tr>
			<td>Jawab</td>
			<td><input type="text" name="jawab"></td>
		</tr>

			<td>
				<input type="submit" name="submit">
				<input type="reset" name="reset">
			</td>
		</tr>
	</table>
</form>
</body>
</html>