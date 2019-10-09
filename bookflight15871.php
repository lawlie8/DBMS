<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',15871,'Air India','Pune','Dublin','18:50','10:40',8)";
    $us_result = $conn->query($sql);
 ?>
