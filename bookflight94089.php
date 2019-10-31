<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',94089,'Singapore Airline','New Delhi','Singapore','18:25:00','01:45:00',6)";
    $us_result = $conn->query($sql);
 ?>
