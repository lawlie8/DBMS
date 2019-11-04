  <?php
        require '../init.php'; require '../signin.php';
        $just = 0;
        $s = $_SESSION['email'];

        $sql = "update car_rentals set email = '$s' where car_id = 3";
            $us_result = $conn->query($sql);
            echo "<script>alert('car to be picked up at location');window.location.replace('../user.php')</script>";

         ?>

    