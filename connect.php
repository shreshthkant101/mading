<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mading";
$port = "3307";

//create connection
$connect = mysqli_connect($servername, $username, $password, $dbname, $port);

//check connection
if(!$connect){
    die("Connection failed: ". mysqli_connect_error());
}
//echo "Connected successfully";
?>