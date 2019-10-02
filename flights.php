<?php require 'init.php' ?>
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
  <li><a href="Books.php">All Accomodation</a></li>
  <li><a href="flights.php">Flights</a></li>
  <li><a href="Series.php">Car Rentals</a></li>

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
  <li><a href="#">Login/Signup</a></li>

</div>
</div>

</div>
<!--/////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="left_countries_container">

  <li onclick=print_flights_us()>United States</li>
  <li onclick=print_flights_australia()>Australia</li>
  <div class="europe">
    <li ><button  id=eur0 onclick="print_flights_europe()" ondblclick="europe_no()" type="button" name="button">Europe</button></li>
    <div id="eur" class="europe_hidden">
      <li onclick="print_flights_europe_france()">France</li>
      <li onclick="print_flights_europe_united_kingdom()">United Kingdom</li>
      <li onclick="print_flights_europe_netherland()">Netherland</li>
      <li onclick="print_flights_europe_germany()">Germany</li>
      <li onclick="print_flights_europe_spain()">Spain</li>
      <li onclick="print_flights_europe_ireland()">Ireland</li>
      <li onclick="print_flights_europe_portugal()">Portugal</li>
      <li onclick="print_flights_europe_austria()">Austria</li>
      <li onclick="print_flights_europe_belgium()">Belgium</li>
      <li onclick="print_flights_europe_greece()">Greece</li>
      <li onclick="print_flights_europe_italy()">Italy</li>
      <li onclick="print_flights_europe_switzerland()">Switzerland</li>
    </div>
  </div>
  <div class="middle_east">
        <li> <button id=mid0 ondblclick="middle_no()" onclick="print_flights_middle_east()">MiddleEast</button></li>
        <div id=mid class="middle_east_hidden">
          <li onclick="print_flights_middle_east_cyprus()">Cyprus</li>
          <li onclick="print_flights_middle_east_oman()">Oman</li>
          <li onclick="print_flights_middle_east_uae()">UAE</li>
          <li onclick="print_flights_middle_east_turkey()">Turkey</li>
          <li onclick="print_flights_middle_east_kuwait()">Kuwait</li>
          <li onclick="print_flights_middle_east_qatar()">Qatar</li>
          <li onclick="print_flights_middle_east_saudi_arabia()">Saudi Arabia</li>
        </div>
  </div>
  <div class="africa">
    <li><button id=afr0 type="button" name="button" onclick="print_flights_africa()" ondblclick ="africa_no()">Africa</button></li>
    <div id=afr class="africa_hidden">
      <li onclick="print_flights_africa_south_africa()">South Africa</li>
      <li onclick="print_flights_africa_egypt()">Egypt</li>
      <li onclick="print_flights_africa_ethopia()">Ethopia</li>
      <li onclick="print_flights_africa_kenya()">Kenya</li>
      <li onclick="print_flights_africa_mauritius()">Mauritius</li>
      <li onclick="print_flights_africa_nigeria()">Nigeria</li>
      <li onclick="print_flights_africa_seychellas()">Seychellas</li>
      <li onclick="print_flights_africa_morocco()">Morocco</li>
    </div>
  </div>
  <div class="asia">
    <li><button id=asi0 onclick=print_flights_asia() ondblclick ="asia_no()" type="button" name="button">Asia</button> </li>
    <div id=asi class="asia_hidden">
        <li onclick="print_flights_asia_myanmar()">Myanmar</li>
        <li onclick="print_flights_asia_thailand()">Thailand</li>
        <li onclick="print_flights_asia_vietnam()">Vietnam</li>
        <li onclick="print_flights_asia_malaysia()">Malaysia</li>
        <li onclick="print_flights_asia_singapore()">Singapore</li>
        <li onclick="print_flights_asia_indonesia()">Indonesia</li>
        <li onclick="print_flights_asia_phillippines()">Phillippines</li>
    </div>
  </div>
  <script type="text/javascript">
/*Asia query extraction*/
function print_flights_asia_phillippines(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from south_east_asia where to_airport="Doha"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_asia_indonesia(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from south_east_asia where to_airport="Jakarta"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_asia_singapore(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from south_east_asia where to_airport="Singapore"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_asia_malaysia(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from south_east_asia where to_airport="Kuala Lumpur"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_asia_vietnam(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from south_east_asia where to_airport="Hanoi"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_asia_thailand(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from south_east_asia where to_airport="Bankok"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_asia_myanmar(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from south_east_asia where to_airport="Myitktina"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


/*Africa query extraction*/
function print_flights_africa_morocco(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from africa where to_airport="Maarrakesh"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_africa_seychellas(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from africa where to_airport="Mahe Island"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_africa_nigeria(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from africa where to_airport="Lagos"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_africa_mauritius(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from africa where to_airport="Mauritius"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_africa_kenya(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from africa where to_airport="Nairobi"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_africa_ethopia(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from africa where to_airport="Addis Ababa"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_africa_egypt(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from africa where to_airport="Luxor"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_africa_south_africa(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from africa where to_airport="Cape Town"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


/*Middleeast query extraction*/
function print_flights_middle_east_saudi_arabia(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from middle_east where to_airport="Al Madinah"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_middle_east_qatar(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from middle_east where to_airport="Doha"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_middle_east_kuwait(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from middle_east where to_airport="Kuwait City"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_middle_east_turkey(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from middle_east where to_airport="Istanbul"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_middle_east_uae(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from middle_east where to_airport="Abu Dhabi"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_middle_east_oman(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from middle_east where to_airport="Muscat"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


function print_flights_middle_east_cyprus(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from middle_east where to_airport="Larnaca"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


  function print_flights_europe_france(){
  var flights_europe_data_country = `
    <?php
      $us_result = $conn->query('select * from europe where to_airport="Paris"');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }
  function print_flights_europe_united_kingdom(){
  var flights_europe_data_country = `
    <?php
      $us_result = $conn->query('select * from europe WHERE to_airport="London"');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }

  function print_flights_europe_spain(){
  var flights_europe_data_country = `
    <?php
      $us_result = $conn->query('select * from europe WHERE to_airport="Madrid"');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }
  function print_flights_europe_ireland(){
  var flights_europe_data_country = `
    <?php
      $us_result = $conn->query('select * from europe WHERE to_airport="Dublin"');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }
  function print_flights_europe_switzerland(){
  var flights_europe_data_country = `
    <?php
      $us_result = $conn->query('select * from europe WHERE to_airport="Geneva"');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }


  function print_flights_europe_italy(){
  var flights_europe_data_country = `
    <?php
      $us_result = $conn->query('select * from europe WHERE to_airport="Milan"');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }

  function print_flights_europe_greece(){
  var flights_europe_data_country = `
    <?php
      $us_result = $conn->query('select * from europe WHERE to_airport="Athenes"');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }


  function print_flights_europe_belgium(){
  var flights_europe_data_country = `
    <?php
      $us_result = $conn->query('select * from europe WHERE to_airport="Brussels"');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }


  function print_flights_europe_austria(){
  var flights_europe_data_country = `
    <?php
      $us_result = $conn->query('select * from europe WHERE to_airport="Linz"');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }


  function print_flights_europe_portugal(){
  var flights_europe_data_country = `
    <?php
      $us_result = $conn->query('select * from europe WHERE to_airport="Lisbon"');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }


function print_flights_europe_germany(){
var flights_europe_data_country = `
  <?php
    $us_result = $conn->query('select * from europe WHERE to_airport="Frankfurt"');
    echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
while($us_array = $us_result->fetch_assoc()){

echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
}



   ?>


  `
  document.getElementById('fl').innerHTML = flights_europe_data_country;
}


  function print_flights_europe_netherland(){
  var flights_europe_data_country = `
    <?php
      $us_result = $conn->query('select * from europe WHERE to_airport="Armsterdam"');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }






  function print_flights_us(){
  var flights_us_data = `
    <?php
      $us_result = $conn->query('select * from us');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_us_data;
  }

  function print_flights_australia(){
  var flights_australia_data = `
    <?php
      $us_result = $conn->query('select * from australia');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_australia_data;
  }




  function print_flights_africa(){
  var flights_africa_data = `
    <?php
      $us_result = $conn->query('select * from africa');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_africa_data;
    africa()
  }
  function print_flights_asia() {
    var flights_asia_data = `
      <?php
        $us_result = $conn->query('select * from south_east_asia');
        echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
    while($us_array = $us_result->fetch_assoc()){

    echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
    }



       ?>


      `
      document.getElementById('fl').innerHTML = flights_asia_data;
      asia()

  }


  function print_flights_middle_east(){
  var flights_middle_east_data = `
    <?php
      $us_result = $conn->query('select * from middle_east');
      echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){

  echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_middle_east_data;
  middle()
  }



  function print_flights_europe() {
    var flights_europe_data = `
      <?php
        $us_result = $conn->query('select * from europe');
        echo '<li><table><tr><td>flight id</td><td>Flight Name</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Seats</td><tr></table></li> ';
    while($us_array = $us_result->fetch_assoc()){

    echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'] .'hrs</td> <td>'.$us_array['seats'] .'</td><td><input type="checkbox"></td></tr></table></li>';
    }



       ?>


      `
      document.getElementById('fl').innerHTML = flights_europe_data;
  europe()
  }
  </script>


  <script type="text/javascript">
  function middle() {
     document.getElementById('mid').style.display = 'block';
     document.getElementById('mid0').style.background = '#0073e6';
  }
  function middle_no(){
    document.getElementById('mid').style.display = 'none';
    document.getElementById('mid0').style.background = '#001b42';
  }
  function asia() {
     document.getElementById('asi').style.display = 'block';
     document.getElementById('asi0').style.background = '#0073e6';
  }
  function asia_no(){
    document.getElementById('asi').style.display = 'none';
    document.getElementById('asi0').style.background = '#001b42';
  }
  function africa() {

     document.getElementById('afr').style.display = 'block';
     document.getElementById('afr0').style.background = '#0073e6';
  }
  function africa_no(){
    document.getElementById('afr').style.display = 'none';
    document.getElementById('afr0').style.background = '#001b42';
  }
  function europe() {
     document.getElementById('eur').style.display = 'block';
     document.getElementById('eur0').style.background = '#0073e6';
  }
  function europe_no(){
    document.getElementById('eur').style.display = 'none';
    document.getElementById('eur0').style.background = '#001b42';
  }
  </script>

</div>
<div id=fl class="flights_list" style="">
  <h1>Search Hundreds of Flights at Once</h1>
  <h3>Different Continent? Why The Same Flight?</h3>
  <img style=" border-bottom:20px solid black; padding-right:900px ;height:200px ;left:100px; z-index: 1111" src="images/flights.png" alt="">

</div>
