<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',20152,'British Airways','Mumbai','London','21:55','7:30',11)";
    $us_result = $conn->query($sql);
 ?>