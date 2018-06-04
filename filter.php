<?php

$dsn = 'mysql:host=localhost;dbname=hotelsatria';
$username = 'root';
$password = '';

try{
    
    $con = new PDO($dsn, $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (Exception $ex) {

    echo 'Not Connected '.$ex->getMessage();
}

$tableContent = '';
$start = '';
$selectStmt = $con->prepare('SELECT * from customer');
$selectStmt->execute();
$customer = $selectStmt->fetchAll();

foreach ($customer as $customer)
{
    $tableContent = $tableContent.'<tr>'.
            '<td>'.$customer['nama_customer'].'</td>'
            .'<td>'.$customer['Tanggal_masuk'].'</td>'
			.'<td>'.$customer['Tanggal_keluar'].'</td>'
			.'<td>'.$customer['jenis_kamar'].'</td>'
			.'<td>'.$customer['alamat_customer'].'</td>';
        
}

if(isset($_POST['search']))
{
$start = $_POST['start'];
$tableContent =' ';
$selectStmt = $con->prepare('SELECT * from customer WHERE jenis_kamar like :start');
$selectStmt->execute(array(
        
         ':start'=>$start.'%'
    
));
$customer = $selectStmt->fetchAll();

foreach ($customer as $customer)
{
    $tableContent = $tableContent.'<tr>'.
            '<td>'.$customer['nama_customer'].'</td>'
            .'<td>'.$customer['Tanggal_masuk'].'</td>'
			.'<td>'.$customer['Tanggal_keluar'].'</td>'
			.'<td>'.$customer['jenis_kamar'].'</td>'
			.'<td>'.$customer['alamat_customer'].'</td>';
        
}
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Filter</title>  
        <style>
            table,tr,td
            {
               border: 1px solid #000; 
            }
            
            td{
                background-color: #ddd;
            }
        </style>   
    </head>
    <body>
        
        <form action="filter.php" method="POST">  
		<center>
            <select name="start">
                <option value="">...</option>
                <option value="Standard Room (STD)" <?php if($start == 'Standard Room (STD)'){echo 'selected';}?>>Standard Room(STD)</option>
                <option value="Superior Room (SUP)" <?php if($start == 'Superior Room (SUP)'){echo 'selected';}?>>Superior Room(SUP)</option>
                <option value="Deluxe Room (DLX)" <?php if($start == 'Deluxe Room (DLX)'){echo 'selected';}?>>Deluxe Room(DLX)</option>
            </select>            
            <input type="submit" name="search" value="Cari">            
            <table>
                <tr>          
                    <td>Nama Pemesan</td> 
					<td>Tanggal masuk</td>
					<td>Tanggal keluar</td>					
					<td>Jenis Kamar</td>	
					<td>Alamat</td>					
                </tr> 
                <?php                
                echo $tableContent;
				?>
            </table>
			<a href='index.html'>Kembali ke menu</a>
		</center>
        </form>     
    </body>    
</html>