<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',23489,'Emirates','Mumbai','Abu Dhabi','15:55:00','17:30:00',2)";
    $us_result = $conn->query($sql);
 ?>
