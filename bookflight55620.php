<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',55620,'United Airlines','New Delhi','Virginia','01:15:00','13:29:00',1)";
    $us_result = $conn->query($sql);
 ?>
