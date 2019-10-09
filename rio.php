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
 <li><h1>In New York</h1></li>
<li><h2>With 2 days and 1 nights </h2></li>
<img src="images/japan1.png" alt="">
</div>


<div class="bangkok_into1">
  <p>Whether your curiosity is piqued by the International Olympic Committee’s selection for the 2016 Games, or you’re heeding the call of the famous twin beaches Copacabana and Ipanema, Rio offers more than you can imagine, and offers it at all hours. With breathtaking views from Corcovado Mountain and breathtaking deals in the city’s endless malls and markets, Rio de Janeiro is a holiday paradise, whatever it is you travel for.</p>
  <h1>What To See?</h1>
  <h3>1 Ipa Nema</h3>
  <img src="images/rio1.png" alt="">
  <p id=bangkok_into_p1>
Ipanema is considered Rio's crown jewel. It offers the best view of the sunset from Arpoador and is inspiration for the legendary song, “The Girl from Ipanema.” Ipanema is an upscale area, home to many high-end restaurants and luxury shops, many of which can be found on the charming Garcia d'Ávila Avenue.<br><br> The neighbourhood is very rich culturally, housing many art galleries that show contemporary art.<br><br> There is also a great variety of nightlife in the neighbourhood, which buzzes with many options for every taste. </p>
  <h3>2 Copacabana beach</h3>
  <img src="images/rio2.png" alt="">
  <p id=bangkok_into_p2>
The rowdy Copacabana is one of the most traditional and old areas from Rio de Janeiro. This neighbourhood is a blend of Brazilian soul - crowded, rowdy and traditional.<br><br> This neighbourhood has a bit of everything: bars with music, pubs, street fairs, chaotic streets, and many shops.<br><br> All these things and more live side-by-side. There are options for all price points and tastes. However, the most powerful draw in Copacabana is still the fantastic view of the coast and the incredible beaches.</p>

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
<li>1: Ipanema Beach Hotel.   115,000Rs</li>
<br>
<li><img height="300px" width="480px" src="images/hotelrio1.png" alt=""> </li>
<br><br>
<form class="" action="rio1_ok.php" method="post">
  <li style="padding-bottom:20px;"><?php if(@$_SESSION['active'] == true) {echo '<input id=date_input type="date" name="deal_date" value="">Date of travel';}?></li>

<li><button onclick='book_flight_bangkok()'><?php if (@$_SESSION['active'] == true){ echo ("Apply Now");}else {
  echo("<a href=logup.php>login</a>");} ?></button></li>
</form>
<br><br><br><br>
<li>2: Villa 25  99,000Rs</li>
<br>
<li><img height="300px" width="480px" src="images/hotelrio2.png" alt=""> </li>
<br><br>
<form class="" action="rio2_ok.php" method="post">
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
