<?php
//harga
$kamaritalian = 150000;
$kamaramerican = 200000;
$kamarjoglo = 250000;
 
//form pembelian
if(!isset($_POST['proses']) && !isset($_POST['bayar'])){
 echo '
 <center>
 <h1>PEMESANAN</h1>
 <form action="" method="POST">
 <table>
 <p><i>harga perkamar</p>
 <tr><td>Kamar Italian </td><td><input type="text" name="ayamgoreng" value="'.$kamaritalian.'"></td></tr>
 <tr><td>Kamar American </td><td><input type="text" name="nasigoreng" value="'.$kamaramerican.'"></td></tr>
 <tr><td>Kamar Joglo </td><td><input type="text" name="pasta" value="'.$kamarjoglo.'"></td></tr>
 </table>
  <p><i>silahkan masukkan jumlah kamar pesanan</p>
 <table>
 <tr><td>Kamar Italian </td><td><input type="text" name="p1"></td></tr>
 <tr><td>Kamar American </td><td><input type="text" name="p2"></td></tr>
 <tr><td>Kamar Joglo </td><td><input type="text" name="p3"></td></tr>
 <tr><td></td><td><input type="submit" name="proses" value="proses"></td></tr>
 </table>
 </form>
 </center>';
 
//jumlah bayar
}elseif(isset($_POST['proses'])){
 $kamaritalian = $_POST['p1'] * $kamaritalian;
 $kamaramerican = $_POST['p2'] * $kamaramerican;
 $kamarjoglo = $_POST['p3'] * $kamarjoglo;
 $total = $kamaritalian+$kamaramerican+$kamarjoglo;
 
echo '
 <center>
 <h1>JUMLAH PEMBAYARAN</h1>
 <p><i>silahkan masukkan uang pembayaran</p>
 <form action="" method="POST">
 <table>
 <tr><td>Kamar Italian </td><td><input type="text" name="ayamgoreng" value="'.$kamaritalian.'"></td></tr>
 <tr><td>Kamar American </td><td><input type="text" name="nasigoreng" value="'.$kamaramerican.'"></td></tr>
 <tr><td>Kamar Joglo </td><td><input type="text" name="pasta" value="'.$kamarjoglo.'"></td></tr>
 <tr><td>Total Bayar</td><td><input type="text" name="totalBayar" value="'.$total.'"></td></tr>
 <tr><td>Jumlah Uang</td><td><input type="text" name="jumlahUang"></td></tr>
 <tr><td></td><td><input type="submit" name="bayar" value="bayar"></td></tr>
 </table>
 </form>
 </center>';
//jumlah bayar,jumlah uang,kembali
}elseif(isset($_POST['bayar'])){
 $totalBayar = $_POST['totalBayar'];
 $jumlahUang = $_POST['jumlahUang'];
 $kembalian = $jumlahUang - $totalBayar;
 echo '
 <center>
 <h1>JUMLAH PEMBAYARAN</h1>
 <form action="" method="POST">
 <table>
 <tr><td>Total Bayar</td><td><input type="text" name="totalBayar" value="'.$totalBayar.'" readonly></td></tr>
 <tr><td>Jumlah Uang</td><td><input type="text" name="jumlahuang" value="'.$jumlahUang.'" readonly></td></tr>
 <tr><td>Kembali</td><td><input type="text" name="jumlahuang" value="'.$kembalian.'" readonly></td></tr>
 </table>
 </form>
 </center>';
}
?>