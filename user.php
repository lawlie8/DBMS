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
  <li onclick=show_user_bookings()>My Flights</li>
  <li onclick="show_user_deal_bookings()">My Bookings</li>
  <li onclick="logout()">Log Out</li>
</div>



<script type="text/javascript">
function show_user_profile(){
  var flights_europe_data_country = `
    <?php
    $just = 0;
    $s = $_SESSION['email'];
    $sql = "select Name,email,password,phone_no from login_table where email='$s' and hash is not NULL";
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
      $sql = "select flight_id,flight_name,from_airport,to_airport,departure,arrival,duration,date from login_table where email='$s' and password is  NULL";
        $us_result = $conn->query($sql);
        echo '<li><table><tr><td>Flight id</td><td>Flight Name</td><td>To</td><td>From</td><td>Departure</td><td>Arrival</td><td>Duration</td><td>Date</td><tr></table></li> ';
    while($us_array = $us_result->fetch_assoc()){
      $hotelfunction = $us_array['to_airport'];
      $hotelfunction = preg_replace('/\s+/', '', $hotelfunction);

    echo '<li><table><tr><td>'.$us_array['flight_id'].'</td><td>'.$us_array['flight_name']. '</td><td>'.$us_array['from_airport'] .'</td><td>'.$us_array['to_airport'].'</td><td>'.$us_array['departure'].'</td><td>'.$us_array['arrival'].'</td><td>'.$us_array['duration'].'</td><td>'.$us_array['date'].'</td><td><button onclick=flight_cancel'.$hotelfunction.'()>Cancel</button></tr></li>';
    }



       ?>


      `
      document.getElementById('fl').innerHTML = flights_europe_data_country;
    }
function show_user_deal_bookings(){
  var flights_europe_data_country = `
    <?php
    $just = 0;
    $s = $_SESSION['email'];
    $sql = "select to_airport,hotel,room_no,date from login_table where email='$s' and password is  NULL";
      $us_result = $conn->query($sql);
      echo '<li><table><tr><td>To</td><td>Hotel Name</td><td>Room no</td><td>Date</td><tr></table></li> ';
  while($us_array = $us_result->fetch_assoc()){
    $just = $just +1;
    $hotelfunction = $us_array['hotel'];
    $hotelfunction = preg_replace('/\s+/', '', $hotelfunction);
  echo '<li><table><tr><td>'.$us_array['to_airport'].'</td><td id=td'.$just.' >'.$us_array['hotel'] .'</td><td>'.$us_array['room_no'].'</td><td>'.$us_array['date'].'</td><td><button onclick=cancel_booking'.$hotelfunction.'()>Cancel</button></tr></li>';
  }



     ?>


    `
    document.getElementById('fl').innerHTML = flights_europe_data_country;
  }


function logout() {
  window.location.replace('logout.php');
}
</script>
<div id=fl class="flights_list_user" style="">
  <h1>This Is Your Profile Page</h1>
  <h3>Check Your Booking, Flights, and many things more.</h3>
  <img style=" border-bottom:20px solid black; padding-right:900px ;height:200px ;left:100px; z-index: 1111" src="images/flights.png" alt="">

</div>



<script type="text/javascript">
function cancel_bookingMoscow(){
  var x = `
    <?php
    $just = 0;
    $s = $_SESSION['email'];
    $sql = "delete from login_table where email='$s' and to_airport='Moscow'";
    echo $sql;
      $us_result = $conn->query($sql);
      $us_array = $us_result->fetch_assoc();
     ?>
  `
  document.getElementById("fl").innerHTML = x
  window.location.reload()


}


function cancel_bookingFloridaMiami(){
  var x = `
    <?php
    $just = 0;
    $s = $_SESSION['email'];
    $sql = "delete from login_table where email='$s' and to_airport='Florida Miami'";
    echo $sql;
      $us_result = $conn->query($sql);
      $us_array = $us_result->fetch_assoc();
     ?>
  `
  document.getElementById("fl").innerHTML = x
  window.location.reload()


}


function cancel_bookingTokyo(){
  var x = `
    <?php
    $just = 0;
    $s = $_SESSION['email'];
    $sql = "delete from login_table where email='$s' and to_airport='Tokyo'";
    echo $sql;
      $us_result = $conn->query($sql);
      $us_array = $us_result->fetch_assoc();
     ?>
  `
  document.getElementById("fl").innerHTML = x
  window.location.reload()


}




function cancel_bookingBankok(){
  var x = `
    <?php
    $just = 0;
    $s = $_SESSION['email'];
    $sql = "delete from login_table where email='$s' and to_airport='Bankok'";
    echo $sql;
      $us_result = $conn->query($sql);
      $us_array = $us_result->fetch_assoc();
     ?>
  `
  document.getElementById("fl").innerHTML = x
  window.location.reload()


}

function cancel_bookingVilla25HotelSuit(){
  var x = `
    <?php
    $just = 0;
    $s = $_SESSION['email'];
    $sql = "delete from login_table where email='$s' and hotel='Villa 25 Hotel Suit'";
    echo $sql;
      $us_result = $conn->query($sql);
      $us_array = $us_result->fetch_assoc();
     ?>
  `
  document.getElementById("fl").innerHTML = x
  window.location.reload()


}



function cancel_bookingIpanemaBeachHotel(){
  var x = `
    <?php
    $just = 0;
    $s = $_SESSION['email'];
    $sql = "delete from login_table where email='$s' and hotel='Ipanema Beach Hotel'";
    echo $sql;
      $us_result = $conn->query($sql);
      $us_array = $us_result->fetch_assoc();
     ?>
  `
  document.getElementById("fl").innerHTML = x
  window.location.reload()


}

function cancel_bookingKnickerBockerHotel(){
  var x = `
    <?php
    $just = 0;
    $s = $_SESSION['email'];
    $sql = "delete from login_table where email='$s' and hotel='Knicker Bocker Hotel'";
    echo $sql;
      $us_result = $conn->query($sql);
      $us_array = $us_result->fetch_assoc();
     ?>
  `
  document.getElementById("fl").innerHTML = x
  window.location.reload()


}



  function cancel_bookingEquinoxHotel(){
    var x = `
      <?php
      $just = 0;
      $s = $_SESSION['email'];
      $sql = "delete from login_table where email='$s' and hotel='Equinox Hotel'";
      echo $sql;
        $us_result = $conn->query($sql);
        $us_array = $us_result->fetch_assoc();
       ?>
    `
    document.getElementById("fl").innerHTML = x
    window.location.reload()


}









</script>
