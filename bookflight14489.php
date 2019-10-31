<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',14489,'Air India','Mumbai','Doha','06:55:00','07:55:00',1)";
    $us_result = $conn->query($sql);
 ?>
