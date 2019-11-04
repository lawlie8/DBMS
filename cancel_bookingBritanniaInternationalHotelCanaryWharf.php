<?php
require 'init.php'; require 'signin.php';
$s = $_SESSION['email'];
$sql = "delete from login_table where email='$s' and hotel ='Britannia International Hotel Canary Wharf'";
  $us_result = $conn->query($sql);
  header('location: user.php')
  ?>
