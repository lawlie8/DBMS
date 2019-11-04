<?php require 'init.php'; require 'signin.php'; ?>
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
</div>
</div>
</div>


<div class="bangkok_first_1">
 <li><h1>London</h1></li>
<li><h2>With 2 days and 1 nights </h2></li>
<img src="images/london0.png" alt="">
</div>


<div class="bangkok_into1">
  <p>London is the capital and largest city of England and the United Kingdom. Standing on the River Thames in the south-east of England, at the head of its 50 mi estuary leading to the North Sea, London has been a major settlement for two millennia. Londinium was founded by the Romans.</p>
  <h1>What To See?</h1>
  <h3>1 Tower of Lindon</h3>
  <img src="images/london1.png" alt="">
  <p id=bangkok_into_p1>
One of London's most famous landmarks, the historic Tower houses the Crown Jewels, the prison cell of Sir Walter Raleigh, known as the Bloody Tower, and the Chapel of St. John and the Royal Armories.</p>
  <h3>2 Churchill War Rooms</h3>
  <img src="images/london3.png" alt="">
  <p id=bangkok_into_p2>
Discover the secrets of the Second World War in the underground nerve centre where Churchill and his war cabinet lived and worked.</p>

</div>

<div class="bangkok_what_we_cover">
<h1>What We Cover?</h1>
<h2>From Flights To Your Hotel Reservations</h2>
<p>Flight Available From India Easy Bookings Easy Cancelations</p>
<br>

<li> <h2>Hotel Bookings</h2></li>
<li><h2>Bus Ride Around The City</h2> </li>
<li><h2>Your Meals</h2> </li>
<li><h2>Every Thing now at 30% Discount</h2> </li>
<br><br>
<li>1:Britannia International Hotel Canary Wharf  122,000Rs</li>
<br>
<li><img height="300px" width="480px" src="images/hotel_london1.png" alt=""> </li>
<br><br>
<form class="" action="london1_ok.php" method="post">
  <li style="padding-bottom:20px;"><?php if(@$_SESSION['active'] == true) {echo '<input id=date_input type="date" name="deal_date" value="">Date of travel';}?></li>

<li><button onclick='book_flight_bangkok()'><?php if (@$_SESSION['active'] == true){ echo ("Apply Now");}else {
  echo("<a href=logup.php>login</a>");} ?></button></li>
</form>
<br><br><br><br>
<li>2: Central Parl, Hotel  105,000Rs</li>
<br>
<li><img height="300px" width="480px" src="images/hotel_london2.png" alt=""> </li>
<br><br>
<form class="" action="london2_ok.php" method="post">
  <li style="padding-bottom:20px;"><?php if(@$_SESSION['active'] == true) {echo '<input id=date_input type="date" name="deal_date" value="">Date of travel';}?></li>

<li><button onclick='book_flight_bangkok()'><?php if (@$_SESSION['active'] == true){ echo ("Apply Now");}else {
  echo("<a href=logup.php>login</a>");} ?></button></li>
</form>







<!-- <li><button type="button" onclick="book_flight_bangkok()" name="button">Apply Now</button> </li>-->
</div>



<script type="text/javascript">
  function book_flight_bangkok(){


  }
</script>
