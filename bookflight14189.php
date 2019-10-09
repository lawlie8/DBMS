<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',14189,'Turkish Airline','Mumbai','Istanbul','05:05:00','14:45:00',9)";
    $us_result = $conn->query($sql);
 ?>
