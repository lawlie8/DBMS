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
 <li><h1>Say Konichiwa to City of cherry flowers.</h1></li>
<li><h2>With 2 days and 1 nights </h2></li>
<img src="images/japan1.png" alt="">
</div>


<div class="bangkok_into1">
  <p>Tradition collides with pop culture in Tokyo, where you can reverently wander ancient temples before rocking out at a karaoke bar.<br> Wake up before the sun to catch the lively fish auction at the Toyosu Market, then refresh with a walk beneath the cherry blossom trees that line the Sumida River. Spend some time in the beautiful East Gardens of the Imperial Palace, then brush up on your Japanese history at the Edo-Tokyo Museum. Don’t forget to eat as much sushi, udon noodles, and wagashi (Japanese sweets) as your belly can handle. </p>
  <h1>What To See?</h1>
  <h3>1 Ueno Asakusa</h3>
  <img src="images/tokyo1.png.jpg" alt="">
  <p id=bangkok_into_p1>
Ueno, Asakusa
Traces of the history and culture of the Edo (old Tokyo) era remain vividly in Ueno and Asakusa.<br><br> Spacious Ueno Park is a great place to relax and visit a variety of different museums and galleries. At Ameyoko which starts in front of Ueno station, the grocery stores and clothing shops are crammed alongside fishmongers.<br><br> It gets particularly busy at the end of the year, when many people go on shopping sprees. The town of Asakusa, developed around Sensoji temple, has many shops selling goods and clothing from old Japan, making it a great place for souvenir hunting.</p>
  <h3>2 Ibekeburo</h3>
  <img src="images/tokyo2.png" alt="">
  <p id=bangkok_into_p2>
Ikebukuro is an area of massive development. Several thousand tenants occupy two giant department stores and shopping malls, where all sorts of shopping and gourmet foods can be enjoyed.<br><br> The 60-story building at the east entrance of the station, Sunshine City, is a landmark within Ikebukuro and features an aquarium, planetarium, theme park as well as an observation platform.<br><br> The popular name for the western side of this area is "Otome Road" (Maiden Road) and there are many shops selling products related to anime with a female theme. It has rapidly become the worldwide headquarters for ‘otaku’ or geek culture</p>

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
<form class="" action="japan_ok.php" method="post">
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
