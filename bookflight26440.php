<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',26440,'Etihad','New Delhi','California','04:45:00','14:00:00',20)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
