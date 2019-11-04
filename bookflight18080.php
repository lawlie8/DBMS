<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',18080,'Qatar Airways','New Delhi','Maarrakesh','10:00:00','16:00:00',6)";
    $us_result = $conn->query($sql);
    header('location: user.php');
 ?>
