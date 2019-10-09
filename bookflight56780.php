<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',56780,'Air India','Mumbai','New York','19:00:00','13:10:00',18)";
    $us_result = $conn->query($sql);
 ?>
