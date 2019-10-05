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




<div class="off_peak_top_container">
  <li> <h1>Off Peak Deals!</h1></li>
  <li><img src="images/main_deals1.png" alt=""></li>
  <p>Waiting for the summer madness to end before traveling? Good things come to those who wait with 20% off stays September 1 to October 31.</p>
  <p>Try Various Location From Our Catalog Starting From 4999/- Rs a Night</p>
</div>

<div class="off_peak_deals_deals_list">
<li><a href="bangkok.php"><h1>20% Bangkok</h1> <img src="images/sivatel.png" alt=""></a></li>
<li><a href="japan.php"><h1>30% Japan</h1> <img src="images/japan.png" alt=""></a></li>
<li><a href="miami.php"><h1>10% Miami</h1> <img src="images/miami.png" alt=""></a>  </li>
<li><a href="moscow.php"><h1>15% Moscow</h1> <img src="images/moscow.png" alt=""></a>  </li>
</div>
