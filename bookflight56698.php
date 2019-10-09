<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',56698,'Qatar Airways','Mumbai','Athenes','04:10:00','15:30:00',11)";
    $us_result = $conn->query($sql);
 ?>
