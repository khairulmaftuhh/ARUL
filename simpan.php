<html>
<div id="isi">
<?php
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hotelsatria";

$konek = new mysqli($host,$username,$password,$db_name);

//mengecek koneksi
if ($konek->connect_error) {
	die("Koneksi gagal karena : ".$konek->connect_error);
}

$nama_cus = $_POST['nama_customer'];
$tgl_msk = $_POST['Tanggal_masuk'];
$tgl_klr = $_POST['Tanggal_keluar'];
$jenis_kamar =$_POST ['jenis_kamar'];
$alamat_cus = $_POST['alamat_customer'];


$sql = "INSERT INTO customer(nama_customer,Tanggal_masuk,Tanggal_keluar,jenis_kamar,alamat_customer) VALUES ('$nama_cus','$tgl_msk','$tgl_klr','$jenis_kamar','$alamat_cus')";
if ($konek->query($sql)) {
	echo "Data Customer BERHASIL ditambah!<br/>";
}else{
	echo "Data Customer GAGAL ditambah : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href='tambah.php'>Tambah Data Customer<a/><br/>";
echo "<a href='tampil.php'>Tampilkan Data Customer<a/>";
?>
</div>
</body>
</html>