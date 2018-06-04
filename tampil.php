<html>
<head>
  <style>
    body{
     font-family: 'Courier New';
     background-color: ;
    }
    table{
      border-radius: 5px;
      border: #ccc 1px solid;
      background-color: #eaebec;

    }
    table td {
    padding: 10px 10px;
    border-top: 1px solid #ffffff;
    border-bottom: 1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;
    background: #fafafa;
    background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
    a{

      text-decoration: none;
    }
  </style>
</head>

<div id="isi">
<form action="filter.php" method="POST">

                <?php
                $host="localhost";
                $username="root";
                $password = "";
                $db_name = "hotelsatria";
                
                $konek = new mysqli($host,$username,$password,$db_name);
                
                //mengecek koneksi
                if ($konek->connect_error) {
                    die("Koneksi gagal karena : ".$konek->connect_error);
                }
                
                $sql="select * from customer";
                $data=$konek->query($sql);
                
                
                
                echo "<center>";
                echo "<h1>Daftar Tamu</h1>";
                echo "<table border='1'>";
                echo "<tr>
                        <td>No</td>
                        <td>Nama Pengunjung</td>
                        <td>Tanggal Masuk</td>
                        <td>Tanggal Keluar</td>
                        <td>Jenis Kamar</td>
                        <td>Alamat Pengunjung</td>
                     </tr>";
                     
                if($data->num_rows>0){
                    $no=1;
                    while($row=$data->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$no++."</td>";
                        echo "<td>".$row['nama_customer']."</td>";
                        echo "<td>".$row['Tanggal_masuk']."</td>";
                        echo "<td>".$row['Tanggal_keluar']."</td>";
                        echo "<td>".$row['jenis_kamar']."</td>";
                        echo "<td>".$row['alamat_customer']."</td>";
                  
                        echo "</tr>";
                    }
                }else{
                    echo "Data Kosong!";
                }
                echo "</table>";
                echo "</center>";
				echo "<center>";
				echo "<a href='index.html'>Kembali ke menu</a>";
				echo "</center>";
                $konek->close();
                
                ?>
                <br>
                <br>
            </div>
</body>
</html>