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
<form action="karyawan.php" method="POST">

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
                
                $sql="select * from karyawan";
                $data=$konek->query($sql);
                
                
                
                echo "<center>";
                echo "<h1>Daftar Karyawan</h1>";
                echo "<table border='1'>";
                echo "<tr>
                        <td>No</td>
                        <td>Nama Karyawan</td>
                        <td>No HP</td>
                        <td>Umur</td>
                        <td>Jabatan Karyawan</td>
                        <td>Alamat Karyawan</td>
                     </tr>";
                     
                if($data->num_rows>0){
                    $no=1;
                    while($row=$data->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$no++."</td>";
                        echo "<td>".$row['nama']."</td>";
                        echo "<td>".$row['no_telp']."</td>";
                        echo "<td>".$row['umur']."</td>";
                        echo "<td>".$row['jabatan']."</td>";
                        echo "<td>".$row['alamat']."</td>";
                        
                  
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