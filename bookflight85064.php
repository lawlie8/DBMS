<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',85064,'Etihad','Mumbai','Frankfurt','21:35:00','06:45:00',9)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
