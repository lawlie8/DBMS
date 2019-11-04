<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',73718,'Lufthansa','Mumbai','Nairobi','02:00:00','12:00:00',10)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
