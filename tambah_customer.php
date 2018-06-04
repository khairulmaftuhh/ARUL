<!DOCTYPE html>
<html>
<head>
	<title>Data Hotel</title>
	<style>
	.b{
		float:right;
		align: center;
		margin-left: 70%;
		
	}
	
	</style>
</head>
<body>
	<a href="index.html">Kembali Ke Menu </a>

	<div class="">
	<center>
	<form action="simpan_customer.php" method="post">

		<h1>RESERVASI</h1>
		<table>
			<tr>
				<td>Nama customer</td>
				<td> : </td>
				<td><input type="text" name="namacustomer"></td>
			</tr>
			<tr>
				<td>Tanggal masuk</td>
				<td> : </td>
				<td><input type="date" name="Tanggal_masuk"></input></td>
			</tr>
			<tr>
				<td>Tanggal keluar</td>
				<td> : </td>
				<td><input type="date" name="Tanggal_keluar"></input></td>
			</tr>
			
			<tr>
				<td>Jenis Kelamin</td>
				<td> : </td>
				<td><input type="radio" name="Jenis_kelamin" ></input>laki-laki</td>
				<td><input type="radio" name="Jenis_kelamin" ></input>perempuan</td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td> : </td>
				<td><input type="text"  name="telpon" rows="8" cols="40"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td> : </td>
				<td><textarea name="alamatcustomer" rows="8" cols="40"></textarea></td>
			</tr>
		
			<tr>
				<td colspan="2"></td>
				<td><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	</center>
	</div>
</body>
</html>