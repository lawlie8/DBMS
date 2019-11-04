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

<!--//////////////////////////////////////////////////////////////////////////////-->


<div class="car_rantal_container">
<?php require 'init.php';

$sql = 'select * from car_rentals where email is  NULL';
$us_result = $conn->query($sql);
while($us_array = $us_result->fetch_assoc()){
    $img = $us_array['img'];
    $model = $us_array['car_model'];
    $pick = $us_array['pickup_location'];
    $price = $us_array['price_per_day'];
    $milage = $us_array['milage'];
    $policy = $us_array['fuel_policy'];
    $car_id = $us_array['car_id'];
    $model = preg_replace('/\s+/', '', $model);
    $pick2 = preg_replace('/\s+/', '', $pick);

  echo "<table><tr><td><img src = images/$img></td><td>Model : $model</td></tr><tr><td>Pick Up Location: $pick</td><td>Price Per Day : $price </td><td>Milage : $milage</td><td>Fuel Policy:  $policy</td><td></td><td><a href=car_rental/book_$car_id.php>Rent</a></td></tr></table>";
}

 ?>
</div>
