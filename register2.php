<?php

include('connection.php');

?>

<body>
    <?php
    $id = $_POST['unit'];

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $dob = $_POST['dob'];

    $password = $_POST['pass'];
    $course = $_POST['course'];
    $email = $_POST['email'];

    switch ($_GET['action']) {
        case 'add':
            $query = "INSERT INTO student
               (ID,Firstname, Lastname,Gender,Address,State,City,DOB,Password,Course,Email)
               VALUES ('" . $id . "','" . $fname . "','" . $lname . "','" . $gender . "','" . $address . "','$state','" . $city . "','" . $dob . "','" . $password . "','" . $course . "','" . $email . "')";
            mysqli_query($db, $query) or die('Error in updating Database');

            break;
    }
    ?>
    <script type="text/javascript">
        alert("Student Registered Successfully");
        window.location = "studentlogin.php";
    </script>
</body>