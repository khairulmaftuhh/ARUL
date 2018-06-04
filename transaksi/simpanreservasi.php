<?php
require_once("config.php");


$namacus = $_POST['namacus'];




$query ="insert into reservasi (namacus) values('$namacus')";

if($konek->query($sql)){
	
}
else{
	
	
}


?>