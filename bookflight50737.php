<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)"." values ('$s',50737,'Emirates','Mumbai','Madrid','10:10','20:20',10)";
    $us_result = $conn->query($sql);
 ?>