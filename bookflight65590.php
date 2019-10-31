<?php
require 'init.php'; require 'signin.php';
$just = 0;
$s = $_SESSION['email'];

$sql = "insert into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration) " ." values ('$s',65590,'Air Asia','Cochin','Canberra','23:30:00','20:30:00',21)";
    $us_result = $conn->query($sql);
 ?>
