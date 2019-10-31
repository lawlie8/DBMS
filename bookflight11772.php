<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',11772,'Turkish Airlines','New Delhi','Lagos','09:00:00','18:00:00',9)";
    $us_result = $conn->query($sql);
 ?>
