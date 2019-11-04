<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',9945,'Lufthansa','Banglore','Linz','3:05','17:30',14)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
