<?php
require 'init.php' ; require 'signin.php'; require 'payment.php';
@$date = $conn->escape_string($_POST['deal_date']);

$now = time();

if (strtotime($date) > $now) {
  //header('Location :payment.php');
  $s = $_SESSION['email'];
  $sql = "INSERT into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration,date)" ."values ('$s',34790,'Qatar Airways','Goa','Florida Miami','3:50:00','16:50:00',13,'$date')";

    $us_result = $conn->query($sql);
    echo "<script>alert('Ticket Booked Please head For Payment')</script>";

} else {
  echo "<script>alert('Date Invalid');history.go(-1);</script>";

}

 ?>
