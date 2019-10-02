<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sangreal';
$conn = new mysqli($server,$username,$password,$dbname);
$result = $conn->query('select * from us');
$user = $result->fetch_assoc();

?>
