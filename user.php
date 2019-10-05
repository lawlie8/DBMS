<?php require 'init.php' ; require 'signin.php' ?>
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



<!--
<div class="register_section">
  <li><a href="logup.php">Login/Signup</a></li>

</div>
-->
</div>

</div>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


<div class="left_countries_container">
  <li onclick=show_user_profile()>User Profile</li>
  <li onclick=show_user_bookings()>My Bookings</li>
  <li onclick="logout()">Log Out</li>
</div>



<script type="text/javascript">
function show_user_profile(){
  var flights_europe_data_country = `
    <?php
    $just = 0;
    $s = $_SESSION['email'];
    $sql = "select Name,email,password,phone_no from login_table where email='$s'";
      $us_result = $conn->query($sql);
      echo '<li><table><tr><td>Name</td><td>Phone No</td><td>Email</td><td>Password</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){


  echo '<li><table><td>'.$us_array['Name'].'</td><td>'.$us_array['phone_no']. '</td><td>'.$us_array['email'] .'</td><td>'.$us_array['password'].'</td></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }
  function show_user_bookings(){
    //<td>'.$us_array['date'].'</td>
    var flights_europe_data_country = `
      <?php
      $just = 0;
      $s = $_SESSION['email'];
      $sql = "select flight_id,flight_name,from_airport,to_airport,departure,arrival,duration,date from login_table where email='$s'";
        $us_result = $conn->query($sql);
        echo '<li><table><tr><td>Flight id</td><td>Flight Name</td><td>To</td><td>From</td><td>To</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Date</td><tr></table></li> ';
    while($us_array = $us_result->fetch_assoc()){


    echo '<li><table><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'].'</td><td>'.$us_array['date'].'</td></li>';
    }



       ?>


      `
      document.getElementById('fl').innerHTML = flights_europe_data_country;
    }


function logout() {
  window.location.replace('logout.php');
}
</script>
<div id=fl class="flights_list" style="">
  <h1>Search Hundreds of Flights at Once</h1>
  <h3>Different Continent? Why The Same Flight?</h3>
  <img style=" border-bottom:20px solid black; padding-right:900px ;height:200px ;left:100px; z-index: 1111" src="images/flights.png" alt="">

</div>
