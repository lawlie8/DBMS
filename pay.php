<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="css/payment.css">
  <head>
    <meta charset="utf-8">
    <title>Payment</title>
  </head>
  <body>
<div class="Payment_container">
<table>
<tr>
<td>Credit Card no: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td> <input type="text" reuired name="credit_card_no_input" value=""></td>
</tr>
<tr>
  <td></td>
  <td><a href=''> <?php $payrs = rand(85000,110000); echo "pay $payrs";?></a> </td>
</tr>
</table>
</div>
  </body>
</html>

<?php
@$credit_card_no = $conn->escape_string($_POST['credit_card_no_input']);

if (strlen($credit_card_no) == 16 {
  $sql = "update login_table set payment = 'paid' where email='$s' and  flidht_id ={}" ;

    g =     '\n$us_result = $conn->query($sql);\n'
}

 ?>
