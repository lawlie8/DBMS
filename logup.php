<!DOCTYPE html>

<html lang="" dir="ltr" >
<link rel="stylesheet" href="css/logup.css">
  <head>
    <meta charset="utf-8">
  </head>
  <body onload=login()>


<div class="login_container">
  <div class="topbuttons">
      <li ><button  id='loginbutton'style="border-right:1px solid;" type="button" onclick=login() name="button">Login</button></li>
      <li><button id='signupbutton' type="button" onclick=signup() name="button">Signup</button> </li>
  </div>

<table id='logintable' class='logintable'>
<form class="" onsubmit='' action='signin.php' method="post">

  <tr>
    <td class="tdspan"><span>Email</span></td><td><input id='login1'type="email" required onsubmit=validate() autocomplete='off' name="login_email_id"  value="" placeholder="  Email">
    </td>
  </tr>
  <tr>
    <td class="tdspan"><span>Password</span></td><td><input id='login2'type="password" autocomplete='off' required name="login_password"  value="" placeholder="  Password"></td>
  </tr>
</table>
<div class="loginbutton">


<button id='loginbutton2' type="submit" name="button">Login</button>
</div>
</form>
<form class="" action="signup.php" method="post">


<table id='signuptable' class='signuptable'>

  <tr>
    <td class="tdspan"><span>Name*</span></td><td><input id='input0' onblur ="checkName()" autocomplete='off' type="text" required name="name_id" value=""  placeholder=" Name*">
    </td>
  </tr>
  <tr>
    <td class="tdspan"><span>Phone no*:</span></td><td><input id='input0' onblur ="" autocomplete='off' required type="text"  name="phone_no" value=""  placeholder=" +91">
    </td>
  </tr>
  <tr>
    <td class="tdspan"><span>Email*</span></td><td><input id='input1' autocomplete='off' type="email" required name="signup_email_id" value=""  placeholder=" Sign Email*">
    </td>
  </tr>
  <tr>
    <td class="tdspan"><span>Password*</span></td><td><input id='input2' type="password" autocomplete='off' required name="signup_password" value=""  placeholder="  Password"></td>
  </tr>
  <tr>
    <td class="tdspan"><span>Address*</span></td><td><input id='input2' type="text" autocomplete='off' required name="signup_address" value=""  placeholder="  Address"></td>
  </tr>
</table>

<div class="signupbutton">

<button id='signupbutton2' type="submit" name="button">Signup</button>

</div>
</div>
</form>
  </body>
</html>

<script type="text/javascript">
function validate(form){

  email = document.getElementById('login1').value
  pass = document.getElementById('login2').value
  if (email == '') {
alert('enter email')
}
if (pass == '') {
alert('Enter password')

}

}
function doStuff()
{
  setTimeout(focusElement, 3000) //wait ten seconds before continuing

}
function focusElement() {
  document.getElementById('input0').focus()

}
function checkName(){
  name = document.getElementById('input0').value;
  if (name==''){


alert('Name Should not be Empty');
doStuff()
}
}
  function signup(){
  document.getElementById('loginbutton').style.background = '#1ab188';   //unnessary code here but dont change it works
  document.getElementById('signuptable').style.display = 'block';
  document.getElementById('signupbutton').style.background = 'blue';
  document.getElementById('signupbutton').style.boxShadow = '1px 2px 3px black';
  document.getElementById('logintable').style.display = 'none';
  document.getElementById('loginbutton').style.boxShadow = '';
  document.getElementById('signupbutton').style.display = '';
  document.getElementById('loginbutton2').style.display = 'none';
  document.getElementById('signupbutton2').style.zIndex = '22';
  document.getElementById('loginbutton').style.zIndex = '-1';
  }
  function login(){
  document.getElementById('signupbutton').style.background = '#1ab188';
  document.getElementById('loginbutton').style.boxShadow = '1px 2px 3px black';
  document.getElementById('signupbutton').style.boxShadow = '';
  document.getElementById('loginbutton2').style.display = 'block';
  document.getElementById('logintable').style.display = 'block';
  document.getElementById('loginbutton').style.background = 'blue';
  document.getElementById('signuptable').style.display = 'none';
  document.getElementById('signupbutton2').style.zIndex = '-1';
  }

</script>

<?php
/*
session_start();
session_unset();
session_destroy();
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'WITCHER_LOGINS';
$conn = new mysqli($server,$username,$password,$dbname);
@$email = $conn-> escape_string($_POST['login_email_id']);
$results = $conn->query("SELECT * FROM cred WHERE email='$email'");
$user = $results->fetch_assoc();
$pass = $conn->escape_string(@$_POST['login_password']);
if(password_verify($pass,$user['hash'])){
  session_start();
  $_SESSION['active'] = true;
  $_SESSION['email'] = $user['email'];
  header('location: index.php');

}else {
//echo "<script>alert('wrong password')</script>";
//header('location: logup.php');
}
*/
 ?>
