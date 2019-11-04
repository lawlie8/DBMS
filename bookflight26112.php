<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',26112,'Air France','New Delhi','Paris','3:55','10:45',7)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
