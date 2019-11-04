<?php
require 'init.php'; require 'signin.php';
$s = $_SESSION['email'];
$hotel_name = $_POST['nn1'];
echo $hotel_name;
$sql = "delete from login_table where email='$s' and hotel ='Knicker Bocker Hotel'";
  $us_result = $conn->query($sql);
  ?>
