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
 <li><h1>Miami City Stairway to Sandy Beaches</h1></li>
<li><h2>With 2 days and 1 nights</h2></li>
<img src="images/miami1.png" alt="">
</div>


<div class="bangkok_into1">
  <p>Whether you're into sport, sunshine or salsa, Miami sizzles all year round with exciting entertainment venues and attractions, world-class hotels and restaurants, great beaches and a nightlife that never sleeps. While South Beach, with its hip nightclubs and pastel-hued buildings, gets all the press, other sections of Miami are just as hot and offer culture, recreation and more. Spend the day soaking in the sights and sounds of Little Havana or soaking up the rays at Haulover Beach Park. Explore the Art Deco District or take the children to the zoo. At the end of the day, chill out at one of the area's bars and nightclubs. In Miami at night, the day is just beginning. </p>
  <h1>What To See?</h1>
  <h3>1 City Tour Via Bus</h3>
  <img src="images/miami2.png" alt="">
  <p id=bangkok_into_p1>
    Great for families of all ages, this tour has everything you need for a great day of fun—free bottled water, illustrated maps, luggage storage, WiFi, and a phone charger at your seat. Buy tickets... Meet your guide... and away you go.

    Discover the best of Miami on this half-day tour around the city. An experienced local guide will introduce you to the cultural sights, sounds, and tastes that make this city fabulous. Explore the iconic Art Deco District in Miami Beach, visit the Wynwood Walls, and learn about Cuban culture at the Latin street fair around Domino Park. It's a one-of-a-kind experience!

    Definitely the best way to see the most of Miami in the shortest time</p>
  <h3>2 Ibekeburo</h3>
  <img src="images/miami3.png" alt="">
  <p id=bangkok_into_p2>
    Start your day with a pickup from your Miami or Miami Beach hotel, and relax as you travel south to Key West by bus.

    The scenic journey follows a route across more than 40 bridges including the Seven Mile Bridge, setting for many a movie scene including True Lies, License to Kill, 2 Fast 2 Furious and more. Hop between islands, and then arrive in Key West where a laid-back, Caribbean vibe awaits.</p>

</div>

<div class="bangkok_what_we_cover">
<h1>What We Cover?</h1>
<h2>From Flights To Your Hotel Reservations</h2>
<p>Flight Available From India Easy Bookings Easy Cancelations</p>
<br>

<li> <h2>Hotel Bookings</h2></li>
<li><h2>Bus Ride Around The City</h2> </li>
<li><h2>Your Meals</h2> </li>
<li><h2>Every Thing now at 10% Discount</h2> </li>
<form class="" action="miami_ok.php" method="post">
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
