<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',13485,'Gulf Air','Cochin','Muscat','05:00:00','06:50:00',2)";
    $us_result = $conn->query($sql);
 ?>
