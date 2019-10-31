<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',33419,'Indigo','Mumbai','Hanoi','07:35:00','19:10:00',12)";
    $us_result = $conn->query($sql);
 ?>
