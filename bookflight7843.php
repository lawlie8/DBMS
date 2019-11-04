<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',7843,'AirIndia','New Delhi','Luxor','15:20:00','20:10:00',11)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
