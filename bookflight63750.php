<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',63750,'Emirates','Kolkata','	Brisbane','09:45:00','22:20:00',13)";
    $us_result = $conn->query($sql);
 ?>
