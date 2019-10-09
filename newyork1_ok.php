<?php
require 'init.php' ; require 'signin.php'; require 'payment.php';
@$date = $conn->escape_string($_POST['deal_date']);
$rm_no = rand(100,999);

$now = time();

if (strtotime($date) > $now) {
  //header('Location :payment.php');
  $s = $_SESSION['email'];
  $sql = "INSERT into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration,date,hotel,room_no)" ."values ('$s',56780,'Air India','Mumbai','New York','19:00:00','13:50:00',18,'$date','Equinox Hotel','$rm_no')";

    $us_result = $conn->query($sql);
    echo "<script>alert('Ticket Booked Please head For Payment')</script>";

} else {
  echo "<script>alert('Date Invalid');history.go(-1);</script>";

}

 ?>
