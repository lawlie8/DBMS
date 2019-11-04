<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',34190,'Lufthansa','Mumbai','Nevada','02:55:00','15:00:00',13)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
