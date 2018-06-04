<?php 
//membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$idb_name = "KMH";

$konek = new mysqli($host, $username, $password, $idb_name);

//cek koneksi
if($konek->connect_error){
	die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$idcustomer = $_POST ['idcustomer'];
$namacustomer = $_POST ['namacustomer'];
$alamatcustomer = $_POST ['alamatcustomer'];
$jkel =$_POST ['jkel'];
$telpon =$_POST ['telpon'];

$sql = "INSERT INTO customer(idcustomer, namacustomer, alamatcustomer,jkel,telpon) VALUES ('$idcustomer','$namacustomer','$alamatcustomer','$jkel','$telpon')";
if($konek->query($sql)){
	echo "Data Customer Berhasil Di tambah! <br/>";
}
else{
	echo "Data Customer Gagal Di Tambah : ".$konek->error."<br/>";
}
$konek->close();



$host = "localhost";
$username = "root";
$password = "";
$db_name = "KMH";

$konek = new mysqli($host, $username, $password, $db_name);

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$sql = "SELECT * FROM customer";
$data = $konek->query($sql);

echo "<a href='index.html'>Kembali ke Menu</a>";
echo "<h1>Daftar Customer</h1>";
echo "<table border='1'>";
echo "<tr><td>No.</td><td>ID Customer</td>
      <td>Nama Customer</td>
      <td>Alamat Customer</td>
      <td>Jenis Kelamin</td>
      <td>jkelamin</td>
      <td>telpon</td>
      <td colspan=2>Aksi</td>
                </tr>";
if ($data->num_rows > 0){
  $no = 1;
  while ($row = $data->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$no++."</td>";
    echo "<td>".$row['idcustomer']."</td>";
    echo "<td>".$row['namacustomer']."</td>";
    echo "<td>".$row['alamatcustomer']."</td>";
    echo "<td>".$row['jkel']."</td>";
    echo "<td>".$row['telpon']."</td>";
    echo "<td><a href='formupdate_customer.php?idcustomer=".$row['idcustomer']."'>Edit</a></td>";
    echo "<td><a href='delete_customer.php?idcustomer=".$row['idcustomer']."'>Hapus</a></td>";
    echo "</tr>";
  }
}else{
  echo "Data Kosong!";
}
echo "</table>";

$konek->close();

?>