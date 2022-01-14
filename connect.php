<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "smartbilling";

// Author Name: Nikhil Bhalerao - www.nikhilbhalerao.com 
// PHP, Laravel and Codeignitor Developer

$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


 ?>