<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "qlsp";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_errno){
    die("Loi ket noi" .$conn->connect_errno);
}


?>