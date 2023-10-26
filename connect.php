<?php

$servername = 'localhost';
$username= 'root';
$pass= '';
$dbname= 'ca2';

$conn = mysqli_connect($servername,$username,$pass,$dbname);//connection query
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());// to show error
}
?>
