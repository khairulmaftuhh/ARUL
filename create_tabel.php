<?php 
	$konek = new mysqli("localhost","root","","KMH");

	if($konek->connect_error){
		die("Koneksi Gagal Karena : ". $konek->connect_error);
	}
	
//tabel customer
	$sql = "create table customer (idcustomer varchar(30) not null primary key, namacustomer varchar(40), alamatcustomer varchar(200), jkel varchar(20), telpon varchar(20))";
	if($konek->query($sql)){
		echo "Tabel Berhasil di Buat";
	}
	else{
		echo "Tabel Tidak Berhasil di Buat karena ".$konek->error;
	}

//idak Berhasil di Buat karena ".$konek->error;
	
	$konek->close();
 ?>