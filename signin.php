<?php
session_start();

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sangreal';
$conn = new mysqli($server,$username,$password,$dbname);
@$email = $conn->escape_string($_POST['login_email_id']);
@$pass = $conn->escape_string($_POST['login_password']);
//$pass = $conn->escape_string(password_hash($_POST['login_password'], PASSWORD_BCRYPT));
@$result = $conn->query("SELECT * FROM login_table WHERE email='$email'");
$user = $result->fetch_assoc();
$hash=password_hash($pass, PASSWORD_BCRYPT);

if(password_verify($pass,$user['hash'])){
  session_start();
  $_SESSION['active'] = true;
  $_SESSION['email'] = $user['email'];
  $_SESSION['flight_id'] = $user['flight_id'];
  $_SESSION['flight_name'] = $user['flight_name'];
  $_SESSION['from_airport'] = $user['from_airport'];
  $_SESSION['to_airport'] = $user['to_airport'];
  $_SESSION['departure'] = $user['departure'];
  $_SESSION['arrival'] = $user['arrival'];
  $_SESSION['Name'] = $user['Name'];
  $_SESSION['phone_no'] = $user['phone_no'];
  $_SESSION['duration'] = $user['duration'];





//  echo "<script>alert('sd')</script>";
  header('location: index.php');

}else {

    //echo "<script>alert('Credentials incorrect')</script>";
  //header('location: logup.php');

}

 ?>
