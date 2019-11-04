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
<img src="images/london1.png" alt="">
</div>


<div class="bangkok_into1">
  <p>The first time you go to New York, go ahead and be a sight-seer—everyone should visit the Statue of Liberty, the Met, Times Square, etc.<br> But on a return trip, pick a neighbourhood and go deep. You’ll find hole-in-the-wall bars, great delis, quirky shops… exploring the non-touristy side of New York is an incredibly rewarding experience for a traveller. </p>
  <h1>What To See?</h1>
  <h3>1 Mid Town</h3>
  <img src="images/london2.png" alt="">
  <p id=bangkok_into_p1>
This is the iconic New York that so many visitors imagine before they visit—spectacular skyscrapers like the Chrysler Building and Empire State Building, iconic public buildings like Grand Central Terminal and the New York Public Library, and the non-stop hustle and bustle of the city streets.<br><br> Fifth Avenue is a shopper's heaven where you can find every kind of store imaginable, with fashion brands ranging from the affordable to the ultra-fancy.<br><br> Visit the Rockefeller Center to experience towering Art Deco grandeur, and foodies will love the busy restaurants that stay open late in Koreatown. After dark, Midtown calms down a bit, but at any time of day or night it still feels 100% New York. </p>
  <h3>2 TimesSquare</h3>
  <img src="images/london3.png" alt="">
  <p id=bangkok_into_p2>
Welcome to the dazzling lights and bustling streets of the Times Square/Theater District, where everything is bigger, brighter, and bolder.<br><br> Around the clock, this famous neighbourhood vibrates with a boundless energy unlike anywhere else, with millions of visitors coming to see a spectacular Broadway show, embarking on a shopping spree, or watching the famous ball drop on New Year’s Eve. <br><br>The surrounding Theater District is home to many historic theaters, which host a mix of classics like The Lion King and Phantom of the Opera, as well as many popular new productions. Spend five minutes here, and you’ll understand why Times Square is nicknamed "the crossroads of the world."</p>

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
<li>1: Equinox Hotel Hudson Yard.   122,000Rs</li>
<br>
<li><img src="images/hudson.png" alt=""> </li>
<br><br>
<form class="" action="newyork1_ok.php" method="post">
  <li style="padding-bottom:20px;"><?php if(@$_SESSION['active'] == true) {echo '<input id=date_input type="date" name="deal_date" value="">Date of travel';}?></li>

<li><button onclick='book_flight_bangkok()'><?php if (@$_SESSION['active'] == true){ echo ("Apply Now");}else {
  echo("<a href=logup.php>login</a>");} ?></button></li>
</form>
<br><br><br><br>
<li>2: Knicker Bocker Hotel.  105,000Rs</li>
<br>
<li><img height="300px" width="480px" src="images/knicker.png" alt=""> </li>
<br><br>
<form class="" action="newyork2_ok.php" method="post">
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
