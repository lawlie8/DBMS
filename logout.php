<?php
session_start();
session_unset();
session_destroy();

 ?>
<!DOCTYPE html>
<html lang="" dir="ltr" >
  <head>
    <link rel="stylesheet" href="css/logout.css">
    <meta charset="utf-8">
    <title>Thank for stopping by</title>
  </head>
  <body>
    <div class="logout_message">
      <h1>You Have been logged out
        <br>
      Thanks For Stopping By...</h1>
    </div>

  </body>
  </html>

  <script >
  function doStuff()
  {
    setTimeout(continueExecution, 5000) //wait ten seconds before continuing
  }
function continueExecution()
  {
    window.location.replace('index.php');
  }

doStuff()
 </script>
