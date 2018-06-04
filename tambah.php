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
	<h1>RESERVASI</h1>
	<form action="simpan.php" method="post">
		<table>
			<tr>
				<td>Nama Pengunjung</td>
				<td>:</td>
				<td><input type="text" name="nama_customer" pattern="[A-Za-z]+" title="hanya huruf" required></td>
			</tr>
			<tr>
				<td>Tanggal Masuk</td>
				<td>:</td>
				<td><input type="date" name="Tanggal_masuk" pattern="^\d{12}$" title="hanya angka" required></td>
			</tr>
			<tr>
				<td>Tanggal Keluar</td>
				<td>:</td>
				<td><input type="date" name="Tanggal_keluar" pattern="^\d{12}$" title="hanya angka" required></td>
			</tr>
			<tr>
			<td> Jenis Kamar</td>
			<td>:</td>
                <td> <select name="jenis_kamar" style=" width: 80%;  ;padding-bottom: 10px;padding-top: 10px; margin: 8px 0;padding-left: 15px;  display: inline-block; border: 1px soli-d #ccc;  box-sizing: border-box; "required>
                 <option value="Standard Room (STD)">Standard Room (STD)</option>
                 <option value="Superior Room (SUP)">Superior Room (SUP)</option>
                 <option value="Deluxe Room (DLX)">Deluxe Room (DLX)</option>
				 </select><br></td>
				</tr>
				<td>Alamat Pengujung</td>
				<td>:</td>
				<td><textarea name="alamat_customer" rows="8" cols="50" pattern="[A-Za-z]+" title="hanya huruf" required></textarea></td>
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
