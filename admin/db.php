<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ticket";
//create connection
$conn =new mysqli($servername, $username, $password,$dbname) or die("Could not connect database");
//check connection
if ($conn->connect_error) {
 	die("connection error");
 } 
?>