<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',26624,'Air Sychelles','Mumbai','Mahe Island','11:00:00','14:00:00',13)";
    $us_result = $conn->query($sql);
 ?>
