<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',23470,'Qantas Airways','Mumbai','Hobart','01:10:00','16:10:00',15)";
    $us_result = $conn->query($sql);
 ?>
