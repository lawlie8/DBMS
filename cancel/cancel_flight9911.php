<?php
$just = 0;
require '../init.php'; require '../signin.php';
$s = $_SESSION['email'];
$sql = "delete from login_table where email='$s' and flight_id =9911" ;
$us_result = $conn->query($sql);
?>
<script>alert('your repayment will be sent back to your account')
window.location.replace('../user.php')</script>