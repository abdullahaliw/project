<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'win';
$conn = mysqli_connect($host,$username,$password,$database);
// print the error when connect to database  
if(!$conn){
echo "Error : ". mysqli_connect_error();
}