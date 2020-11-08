<?php 

$dbhost ='localhost';
$dbuser ='root';
$dbpass ='';
$dbname ='careu';


$connection = mysqli_connect('localhost','root','','careu');

if(mysqli_connect_errno()){

	die('Database connection failed' . mysqli_connect_error());
}


 ?>