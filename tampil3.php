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
<body>
<center>

<h1>Daftar Tamu </h1>

<form method="get" action="tampil3.php">
   <div> 
  <input type="date"  placeholder="cari tanggal..."  name="cari">
  <input type="submit" value="cari" class="btn btn-info" ></div>
</form><br>
 
<?php 
if(isset($_GET['cari'])){
  $cari = $_GET['cari'];
}          
?> 
<table>
<?php
// membuat koneksi
$host = "localhost";
$username = "root";
$password = "";
$db_name = "hotelsatria";

$konek = new mysqli($host, $username, $password, $db_name);
?>
<br><br>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <b><tr><td>No.</td><td>Nama Customer</td><td>Alamat Customer</td><td>Tanggal Pesan</td><td>Total Barang</td><td>Total Biaya</td></tr>
                    </thead>
                     <?php


if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $queri = "select * from customer where Tanggal_masuk like '%".$cari."%'";       
  }else{
    $queri = "select * from customer";   
  }
$hasil=mysqli_query ($konek,$queri);   
$no=1;
while ($data = mysqli_fetch_array ($hasil)){  
      
        echo "<tr>   
          <td>".$no++."</td>             
          <td>".$data[0]."</td>  
          <td>".$data[1]."</td>
          <td>".$data[2]."</td>
          <td>".$data[3]."</td>
          <td>".$data[4]."</td>
          </tr>";      
      
}
echo "<center>";
echo "<a href='index.html'>Kembali ke menu</a>";
echo "</center>";
                
 ?>  
</table><br><br><br><br><br>
            </div>
    </div>
  </div>
</div>
    

</html>