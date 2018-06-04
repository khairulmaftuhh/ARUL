<html>
		<div id="isi">
        <!DOCTYPE html>
<html>
<head>
	<style>
		input{width: 80%;  ;padding-bottom: 10px;padding-top: 10px; margin: 8px 0;padding-left: 15px;  display: inline-block; border: 1px solid #ccc;  box-sizing: border-box;}
	</style>
	<title>HOTEL SATRIA</title>
</head>
<body>
<center>
	<img style="center;" width="1362" height="80" src="images/home/hotelsatria.jpg" alt="" />
	<h1>KARYAWAN</h1>
	<form action="tampilkaryawan.php" method="post">
		<table>
			<tr>
				<td>Nama Karyawan</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>No HP</td>
				<td>:</td>
				<td><input type="text" name="no_telp" required></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="text" name="umur" required></td>
			</tr>
			<tr>
			<td> Jabatan Karyawan</td>
			<td>:</td>
                <td> <select name="jabatan" style=" width: 80%;  ;padding-bottom: 10px;padding-top: 10px; margin: 8px 0;padding-left: 15px;  display: inline-block; border: 1px soli-d #ccc;  box-sizing: border-box; "required>
                 <option value="Front Office">Front Office</option>
                 <option value="House Keeping">House Keeping</option>
                 <option value="Waiters">Waiters</option>
				 <option value="Hotel Marketing">Hotel Marketing</option>
                
				 </select><br></td>
				</tr>
				<td>Alamat Karyawan</td>
				<td>:</td>
				<td><textarea name="alamat" rows="8" cols="50" required></textarea></td>
			</tr>
			<tr>
				<td colspan="2"></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
<a href="index.html">Kembali Ke Menu </a>
</center>
</body>
</html>
		