import time
list = [96825,23015,5576,7843,9911,9945,11772,13485,14189,14489,15871,17940,18080,20152,23470,23489,25960,26112,26280,26440,26624,31616,33419,33777,34190,34469,34790,37299,39796,43280,44846,50737,51286,54219,54230,54369,54489,55620,56698,56780,58080,61426,63485,63750,65590,73718,74280,76260,77759,82171,85064,90803,90966,92619,94089,94480,97470,98771]



print(len(list))
for i in list:
    rid = i
    a0 = '''

            <!DOCTYPE html>
            <html lang="en" dir="ltr">
            <link rel="stylesheet" href="css/payment.css">
              <head>
                <meta charset="utf-8">
                <title>Payment</title>
              </head>
              <body>
            <div class="Payment_container">
            <form method=post action=payment_of_flight{}.php>
            <table>
            <tr>
            <td>Credit Card no: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
            <td> <input type="text" name="credit_card_no_input" value=""></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="button" name="button"> <?php $payrs = rand(85000,90000); echo "pay $payrs";?></button></td>
            </tr>
            </table>
            </form>
            </div>
              </body>
            </html>



        '''.format(rid)
    a = '<?php\n'
    b = '$just = 0;\n'
    c =    "require '../init.php'; require '../signin.php';\n"
    d = "@$s = $_SESSION['email'];\n"
    e0 ='''@$credit_card_no = $conn->escape_string($_POST['credit_card_no_input']);\n'''.format(rid)

    e1 = "if (strlen($credit_card_no) == 16){\n"
    e2='''  $sql = "update login_table set payment = 'paid' where email='$s' and  flight_id ={}" ;'''.format(rid)
    e3 = '''
    $us_result = $conn->query($sql);\n'''
    e4 = '''header('location: ../bookflight{}.php');
    '''.format(rid)
    j  =    '}?>\n'


    r = "transaction/payment_of_flight{}.php".format(rid)
    f = open(r,"w+")
    x = a0+a+b+c+d+e0+e1+e2+e3+e4+j
    print(x)
    f.write(x)
    f.close()
