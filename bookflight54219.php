<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',54219,'Qatar Airways','Mumbai','Doha','06:55:00','07:55:00',2)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
