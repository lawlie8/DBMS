<?php
require 'init.php'; require 'signin.php';
$s = $_SESSION['email'];
$sql = "select * from car_rentals where email = '$s'";
$us_result = $conn->query($sql);
echo "<li><table><tr><td>Model</td><td>Pick up at</td><td>price per day</td><td>Milage</td><tr></table></li>";
while($us_array = $us_result->fetch_assoc()){
    $model = $us_array['car_model'];
    $pick = $us_array['pickup_location'];
    $price = $us_array['price_per_day'];
    $milage = $us_array['milage'];
  echo "<table><tr><td>$model</td></tr><tr><td>$pick</td><td>$price</td><td>$milage</td></tr></table>";
}

 ?>
