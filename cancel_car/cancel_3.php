  <?php
        require '../init.php'; require '../signin.php';
        $just = 0;
        $s = $_SESSION['email'];

        $sql = "update car_rentals set email = NULL where car_id = 3";
            $us_result = $conn->query($sql);
        header("location: ../user.php");
        ?>

    