<?php
$host='localhost';
$dbname='projeto';
$user='root';
$password='';
$pdo = mysqli_connect($host,$user,$password,$dbname);

if (!$pdo){
  die("Connection failed" . mysqli_connect_error());
}
?>