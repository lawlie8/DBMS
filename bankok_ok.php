<?php
require 'init.php' ; require 'signin.php'; require 'payment.php';
@$date = $conn->escape_string($_POST['deal_date']);

$now = time();

if (strtotime($date) > $now) {
  //header('Location :payment.php');
  $s = $_SESSION['email'];
  $sql = "INSERT into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration,date)" ."values ('$s',63485,'Spicejet','Cochin','Bankok','5:00:00','6:50:00',14,'$date')";

    $us_result = $conn->query($sql);
    echo "<script>alert('Ticket Booked Please head For Payment')</script>";

} else {
  echo "<script>alert('Date Invalid');history.go(-1);</script>";

}

 ?>
