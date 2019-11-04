<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',74280,'Etihad','New Delhi','Larnaca','09:00:00','12:45:00',3)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
