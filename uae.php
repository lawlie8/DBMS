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
 <li><h1>UAE</h1></li>
<li><h2>With 2 days and 1 nights </h2></li>
<img src="images/uae0.png" alt="">
</div>


<div class="bangkok_into1">
  <p>The United Arab Emirates, sometimes simply called the Emirates, is a country in Western Asia at the southeast end of the Arabian Peninsula on the Persian Gulf, bordering Oman to the east and Saudi Arabia to the south and west, as well as sharing maritime borders with Qatar to the west and Iran to the north</p>
  <h1>What To See?</h1>
  <h3>1 Burj Khalifa</h3>
  <img src="images/uae1.png" alt="">
  <p id=bangkok_into_p1>
Described as both a ‘Vertical City’ and ‘A Living Wonder,’ Burj Khalifa, developed by Dubai-based Emaar Properties PJSC, is the world’s tallest building. Rising gracefully from the desert, Burj Khalifa honours the city with its extraordinary union of art, engineering and meticulous craftsmanship. At 828 metres (2,716.5 ft), the 200 plus storey Burj Khalifa has 160 habitable levels, the most of any building in the world. The tower was inaugurated on January 4, 2010, and is responsible for a number of world-firsts. The tower became the world’s tallest man-made structure just 1,325 days after excavation work started in January 2004. Burj Khalifa utilised a record-breaking 330,000 cubic metres of concrete; 39,000 tonnes of steel reinforcement; 103,000 square metres of glass; and 15,500 square metres of embossed stainless steel. The tower took 22 million man hours to build.</p>
  <h3>2 Churchill War Rooms</h3>
  <img src="images/uae2.png" alt="">
  <p id=bangkok_into_p2>
The Emirates Palace is a luxury hotel in Abu Dhabi, United Arab Emirates operated by Kempinski and opened in February </p>

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
<li>1:Park Regis  166,000Rs</li>
<br>
<li><img height="300px" width="480px" src="images/hotel_uae1.png" alt=""> </li>
<br><br>
<form class="" action="uae1_ok.php" method="post">
  <li style="padding-bottom:20px;"><?php if(@$_SESSION['active'] == true) {echo '<input id=date_input type="date" name="deal_date" value="">Date of travel';}?></li>

<li><button onclick='book_flight_bangkok()'><?php if (@$_SESSION['active'] == true){ echo ("Apply Now");}else {
  echo("<a href=logup.php>login</a>");} ?></button></li>
</form>
<br><br><br><br>
<li>2: Atana Hotel  130,000Rs</li>
<br>
<li><img height="300px" width="480px" src="images/hotel_uae2.png" alt=""> </li>
<br><br>
<form class="" action="uae2_ok.php" method="post">
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
