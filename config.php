<?php
$server ="localhost";
$username = "root";
$password = "";
$dbname ="users";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn == false){

    die("failed to connect the database" . mysqli_connect_error());
}else{
    return $conn;
}



?>