<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',94480,'Turkish Airline','Mumbai','Al Madinah','10:10:00','03:30:00',4)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
