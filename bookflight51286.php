<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',51286,'Gulf Air','New Delhi','Luxor','11:20:00','22:10:00',11)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
