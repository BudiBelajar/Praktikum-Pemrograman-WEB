<!DOCTYPE html>
<html>
<head>
	<title>INSERT DATA</title>
</head>
<body>
	<form action="aksi_jadwal.php" method="POST">
		<table>
			<tr>
				<td>Hari</td>
				<td><select name="hari">
					<option value="Ahad">Ahad</option>
					<option value="Senin">Senin</option>
					<option value="Selasa">Selasa</option>
					<option value="Rabu">Rabu</option>
					<option value="Kamis">Kamis</option>
					<option value="Jumat">Jumat</option>
					<option value="Sabtu">Sabtu</option>
				</select></td>
			</tr>
			<tr>
				<td>Jam</td>
				<td><input type="text" name="jam" required=""></td>
			</tr>
			<tr>
				<td>Ruang</td>
				<td><input type="text" name="ruang" required=""></td>
			</tr>
			<tr>
				<td>Mata Kuliah</td>
				<td><select name="Mata Kuliah">
					<?php  		
					include "koneksi.php";
					$a="SELECT * FROM matkul";
					$b=$koneksi ->query($a);
					while ($c=$b->fetch_array()) {
					?>
					<option value=<?php echo $c['id_matkul']; ?>> <?php echo $c['nm_matkul']; ?></option>
				<?php 
				}
				?>
				</select></td>
			</tr>
			<tr>
				<td><input type="submit" name="SAVE"></td>
				<td><input type="reset" name="CANCEL"></td>
			</tr>
		</table>
	</form>

</body>
</html>