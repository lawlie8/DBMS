<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',44846,'Cathay Pacific','Mumbai','Brussels','1:10','9:20',9)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
