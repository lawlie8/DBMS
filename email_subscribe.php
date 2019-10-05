<?php require 'init.php'  ?>
<!DOCTYPE html>
<html style="background-color:#001b42" lang="en" dir="ltr" onload="document.body.style.zoom = 1.0">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
<link rel="stylesheet" href="css/master.css">
  <head>
    <meta charset="utf-8">
<title>Sangreal Travels</title>
  </head>

<div class="nav_bar">
    <div class="nav_elements">
  <li><a href="index.php">Home</a></li>
  <li><a href="all_accomodation.php">All Accomodation</a></li>
  <li><a href="flights.php">Flights</a></li>
  <li><a href="car_rental.php">Car Rentals</a></li>

<li>

<div class="dropdown">
  <button type="button" class="drp_btn">Other</button>
<div class="dropdown_content">
<a  href="">Steam Link</a>
<a  href="About.php">About us</a>
</div>
</div>
</li>

<div class="register_section">
  <li><a href="login.php">Login/Signup</a></li>

</div>
</div>

</div>
<div class="thanks_for_subscribing">
<h1>You have subscribed to sangreal Secret Deals</h1>

</div>

<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sangreal';
$conn = new mysqli($server,$username,$password,$dbname);
@$email = $conn->escape_string($_POST['email_subscribe']);
echo $email;
$sql = "INSERT INTO email_subscribe (email)". "VALUES('$email')";
$conn->query($sql);
 ?>
 <script >
 function doStuff()
 {
   setTimeout(continueExecution, 3000) //wait three seconds before continuing
 }
function continueExecution()
 {
   window.location.replace('index.php');
 }

doStuff()
</script>
