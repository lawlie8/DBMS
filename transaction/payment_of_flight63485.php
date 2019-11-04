

            <!DOCTYPE html>
            <html lang="en" dir="ltr">
            <link rel="stylesheet" href="css/payment.css">
              <head>
                <meta charset="utf-8">
                <title>Payment</title>
              </head>
              <body>
            <div class="Payment_container">
            <form method=post action=payment_of_flight63485.php>
            <table>
            <tr>
            <h3>Enter Credit Card Info</h3>
            <td>Credit Card no: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            <td> <input type="text" name="credit_card_no_input" value=""></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="button" name="button"> <?php $payrs = rand(85000,90000); echo "pay Rs. $payrs";?></button></td>
            </tr>
            </table>
            </form>
            </div>
              </body>
            </html>



        <?php
$just = 0;
require '../init.php'; require '../signin.php';
@$s = $_SESSION['email'];
@$credit_card_no = $conn->escape_string($_POST['credit_card_no_input']);
if (strlen($credit_card_no) == 16){
  $sql = "update login_table set payment = 'paid' where email='$s' and  flight_id =63485" ;
    $us_result = $conn->query($sql);
header('location: ../bookflight63485.php');
    }?>
