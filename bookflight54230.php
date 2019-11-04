<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',54230,'Malindo Air','New Delhi','Perth','22:05:00','14:10:00',16)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
