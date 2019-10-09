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
 <li><h1>Enter The Breezy City Of Bangkok</h1></li>
<li><h2>With 2 days and 2 nights </h2></li>
<img src="images/sivatel.png" alt="">
</div>


<div class="bangkok_into1">
  <p>Bangkok welcomes more visitors than any other city in the world and it doesn’t take long to realise why.<br> Bangkok is a city of contrasts with action at every turn. Marvel at the gleaming temples, catch a tuk tuk along the bustling Chinatown or take a longtail boat through floating markets.<br> Food is another Bangkok highlight, from local dishes served at humble street stalls to haute cuisine at romantic rooftop restaurants.</p>
  <h1>What To See?</h1>
  <h3>1 Grand Palace & Wat Prakeaw</h3>
  <img src="images/bangkok1.png" alt="">
  <p id=bangkok_into_p1> The Grand Palace and Wat Prakaew command respect from all who have walked in their sacred grounds.<br><br>Built in 1782, and for 150 years the home of Thai Kings and the Royal court, the Grand Palace continues to have visitors in awe with its beautiful architecture and intricate detail.<br><br> Wat Pra Kaew enshrines Phra Kaew Morakot (the Emerald Buddha), the sacred Buddha image meticulously carved from a single block of emerald</p>
  <h3>2 Wat Arun (The Temple of Dawn)</h3>
  <img src="images/bankok2.png" alt="">
  <p id=bangkok_into_p2>The impressive silhouette of Wat Arun’s towering spires is one of the most recognised in Southeast Asia.<br><br> Constructed during the first half of the 19th century in the ancient Khmer style, the stupa showcasing ornate floral pattern decked out in glazed porcelain is stunning up close.<br><br> Apart from its beauty, Wat Arun symbolises the birth of the Rattanakosin Period and the founding of the new capital after Ayutthaya fell.</p>

</div>

<div class="bangkok_what_we_cover">
<h1>What We Cover?</h1>
<h2>From Flights To Your Hotel Reservations</h2>
<p>Flight Available From India Easy Bookings Easy Cancelations</p>
<br>

<li> <h2>Hotel Bookings</h2></li>
<li><h2>Bus Ride Around The City</h2> </li>
<li><h2>Your Meals</h2> </li>
<li><h2>Every Thing now at 20% Discount</h2> </li>
<form class="" action="bankok_ok.php" method="post">

<li style="padding-bottom:20px;"><?php if(@$_SESSION['active'] == true) {echo '<input id=date_input type="date" name="deal_date" value="">Date of travel';}?></li>

<li><button onclick='book_flight_bangkok()'><?php if (@$_SESSION['active'] == true){ echo ("Apply Now");}else {
  echo("<a href=logup.php>login</a>");} ?></button></li>
</form>





<!-- <li><button type="button" onclick="book_flight_bangkok()" name="button">Apply Now</button> </li>-->
</div>



<script type="text/javascript">

</script>





<!--
    var flights_europe_data_country = `
      /*
      $p = $_SESSION['password'];
      @$date = $conn->escape_string($_POST['deal_date']);
      $s = $_SESSION['email'];
      $sql = "INSERT into login_table (email,flight_id,flight_name,from_airport,to_airport,departure,arrival,duration)" ."values ('$s',63485,'Spicejet','Cochin','Bankok','5:00:00','6:50:00',14)";

        $us_result = $conn->query($sql);
       */?>
      `

      var del `
      $p = $_SESSION['password'];
      @$date = $conn->escape_string($_POST['deal_date']);
      $s = $_SESSION['email'];
      $sql = "delete from login_table where password is NULL";

        $us_result = $conn->query($sql);
       ?>
      `
    -->
