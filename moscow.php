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
 <li><h1>Moscow City</h1></li>
<li><h2>With 2 days and 1 nights </h2></li>
<img src="images/moscow1.png" alt="">
</div>


<div class="bangkok_into1">
  <p>The political, scientific, historical, architectural and business centre of Russia, Moscow displays the country's contrasts at their most extreme.<br> The ancient and modern exist side by side in this city of 10 million.<br> Catch a metro from one of the ornate stations to see Red Square, the Kremlin, the nine domes of St Basil's Cathedral, Lenin's Mausoleum, the KGB Museum and other symbols of Moscow's great and terrible past, then lighten up and go shopping in Boulevard Ring, or people-watch in Pushkin Square.</p>
  <h1>What To See?</h1>
  <h3>1 Arbat</h3>
  <img src="images/moscow2.png" alt="">
  <p id=bangkok_into_p1>

Crowds of tourists, both local and international take in Old Arbat and its modern and gigantic peer – New Arbat.<br><br> One reason visitors keep coming is no doubt Konstantin Melnikov’s famous private house, now open to the public and worthy of a visit.<br><br> After exploring one of the oldest parts of Moscow, avoid the crowds and turn to the side streets and boulevards where calmness and affordable food is plentiful.</p>
  <h3>2 Patriarch Ponds</h3>
  <img src="images/moscow3.png" alt="">
  <p id=bangkok_into_p2>
When you need to hide from the city’s noise and traffic but don’t want to stroll too far, Patriarch Ponds is the place to be.<br> Calm water, friendly swans and ducks with beautiful early 20th century architecture in the background make this neighborhood a place you’ll never want to leave.<br><br> Besides stylish bars and restaurants scattered in the streets around the pond, you’ll be able to enjoy museum life from modern art to a former private apartment of Mikhail Bulgakov.<br><br> As most of the businesses are open late, stop for a cocktail and then stroll by the pond to rent a boat and row yourself to the middle of the “bowl” as the locals call it.</p>

</div>

<div class="bangkok_what_we_cover">
<h1>What We Cover?</h1>
<h2>From Flights To Your Hotel Reservations</h2>
<p>Flight Available From India Easy Bookings Easy Cancelations</p>
<br>

<li> <h2>Hotel Bookings</h2></li>
<li><h2>Bus Ride Around The City</h2> </li>
<li><h2>Your Meals</h2> </li>
<li><h2>Every Thing now at 15% Discount</h2> </li>
<form class="" action="moscow_ok.php" method="post">
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
