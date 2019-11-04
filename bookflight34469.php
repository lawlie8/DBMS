<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',34469,'Emirates','New Delhi','Kuala Lumpur','06:20:00','14:15:00',8)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
