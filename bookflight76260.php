<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',76260,'Air India','Mumbai','Melbourne','19:00:00','06:00:00',11)";
    $us_result = $conn->query($sql);
 ?>
