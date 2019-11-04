import time
list = [1,2,3,4,5,6]


print(len(list))
for i in list:
    rid = i
    a0 = '''  <?php
        require '../init.php'; require '../signin.php';
        $just = 0;
        $s = $_SESSION['email'];

        $sql = "update car_rentals set email = '$s' where car_id = {}";
            $us_result = $conn->query($sql);
            echo "<script>alert('car to be picked up at location');window.location.replace('../user.php')</script>";

         ?>

    '''.format(rid)
    r = "book_{}.php".format(rid)
    f = open(r,"w+")
    x = a0
    print(x)
    f.write(x)
    f.close()
