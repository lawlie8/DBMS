<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',26280,'Oman Air','Trivandrum','Adelaide','08:45:00','08:00:00',11)";
    $us_result = $conn->query($sql);
 ?>
