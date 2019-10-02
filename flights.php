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
      <li>France</li>
      <li>United Kingdom</li>
      <li>Netherland</li>
      <li>Germany</li>
      <li>Spain</li>
      <li>Ireland</li>
      <li>Portugal</li>
      <li>Austria</li>
      <li>Belgium</li>
      <li>Greece</li>
      <li>Italy</li>
      <li>Switzerland</li>
    </div>
  </div>
  <div class="middle_east">
        <li> <button id=mid0 ondblclick="middle_no()" onclick="print_flights_middle_east()">MiddleEast</button></li>
        <div id=mid class="middle_east_hidden">
          <li>Cyprus</li>
          <li>Oman</li>
          <li>UAE</li>
          <li>Turkey</li>
          <li>Kuwait</li>
          <li>Qatar</li>
          <li>Saudi Arabia</li>
        </div>
  </div>
  <div class="africa">
    <li><button id=afr0 type="button" name="button" onclick="print_flights_africa()" ondblclick ="africa_no()">Africa</button></li>
    <div id=afr class="africa_hidden">
      <li>South Africa</li>
      <li>Egypt</li>
      <li>Ethopia</li>
      <li>Kenya</li>
      <li>Mauritius</li>
      <li>Nigeria</li>
      <li>Seychellas</li>
      <li>Morocco</li>
    </div>
  </div>
  <div class="asia">
    <li><button id=asi0 onclick=print_flights_asia() ondblclick ="asia_no()" type="button" name="button">Asia</button> </li>
    <div id=asi class="asia_hidden">
        <li>Myanmar</li>
        <li>Thailand</li>
        <li>Vietnam</li>
        <li>Malaysia</li>
        <li>Singapore</li>
        <li>Indonesia</li>
        <li>Phillippines</li>
    </div>
  </div>
  <script type="text/javascript">
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
<div id=fl class="flights_list">
</div>
