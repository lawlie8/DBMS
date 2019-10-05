<?php require 'init.php' ; require 'signin.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" onload="document.body.style.zoom = 1.0">
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

<li id='login_variable'><?php if (@$_SESSION['active'] == true){ echo ( "<a href=user.php>". $_SESSION['email'] ."</a>");}else {
  echo("<a href=logup.php>login</a>");
} ?></li>



<!--
<div class="register_section">
  <li><a href="logup.php">Login/Signup</a></li>

</div>
-->
</div>

</div>
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="main">
  <img src="images/icon.png" alt="">
  <h1>Find Deals For Any Season</h1>
  <p>For Cozy and Country homes to funky Cities.</p>
<li><input type="text" name="" value=""  placeholder="   Where are you going"></li>
<li><input placeholder="   Date" width='' class="textbox-n" type="text" onfocus="(this.type='date')"   onblur="(this.type='text')" id="date"> </li>
<li><input type="text" onfocus="this.type='dropdown'" onblur="this.type='text'" placeholder="   Number of passengers" name="" value=""> </li>
<li><button type="button" name="button">Search Bookings</button> </li>
</div>
<div class="main_deals1">
  <img src="images/main_deals1.png" alt="">
<div class="main_deals1_">


<a href="off_peak_deals.php"><h3>Off Peak Deals</h3></a>
<p>Summer vacation is over, but not for you. Get 20% off stays September to October.</p>
</div>
</div>
<div class="main_deals2">
<li><h1>New York</h1><img src="images/new_york.png" alt=""></li>
<li><h1>Rio De Janerio</h1><img src="images/rio_beach.png" alt=""> </li>

</div>

<div class="main_deals3">
<li><h1>UK</h1><p>3 Packages</p> <img src="images/UK.png" alt=""> </li>
<li><h1>UAE</h1><p>5 Packages</p> <img src="images/UAE.png" alt=""> </li>
<li><h1>Australia</h1><p>2 Packages</p><img src="images/Australia.png" alt=""> </li>
</div>
<form class="" action="email_subscribe.php" method="post">


<div class="email_subscribe">
<li><h2>Subscribe</h2> </li>
<li> <input type="email" name="email_subscribe"  placeholder="                      Subscribe for Secret Deals" value=""></li>
<li><button type="button" action='email_subscribe.php' ame="button">Subscribe</button> </li>
</form>
</div>
<div class="end_credits">
<li>US</li>
<li>UAE</li>
<li>Malaysia</li>
<li>Japan</li>
<li>Australia</li>
<li>United Kingdom</li>
</div>


<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sangreal';
$conn = new mysqli($server,$username,$password,$dbname);
@$email = $conn->escape_string($_POST['email_subscribe']);
echo $email;
//$conn->query("insert into email_subscribe values($email)");

 ?>
