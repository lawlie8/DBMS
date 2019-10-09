<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',34790,'Qatar Airways','Goa','Florida','03:50:00','16:50:00',13)";
    $us_result = $conn->query($sql);
 ?>
