<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sangreal';
$conn = new mysqli($server,$username,$password,$dbname);
@$_SESSION['email'] = $_POST['signup_email_id'];
@$email = $conn->escape_string($_POST['signup_email_id']);
$passwrd = $conn->escape_string($_POST['signup_password']);
$hash = $conn->escape_string(password_hash($_POST['signup_password'], PASSWORD_BCRYPT));
$name_id = $conn->escape_string($_POST['name_id']);
$phno = $conn->escape_string($_POST['phone_no']);
$hash = password_hash($passwrd, PASSWORD_BCRYPT);
$sql = "INSERT INTO login_table (email,password,hash,phone_no,Name)". "VALUES('$email', '$passwrd' ,'$hash','$phno','$name_id')";
if ($conn->query($sql)) {

    header("location: logup.php");
}else {
  echo '<script>alert("signup failed hashing error or user already exists");</script>';
}
?>
