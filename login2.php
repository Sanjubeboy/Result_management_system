<?php

include('connection.php');

?>

<body>

    <?php

    $password = $_POST['pass'];
    $email = $_POST['email'];

    switch ($_GET['action']) {
        case 'login':
            $query = "SELECT Email,Password from student where Email='$email' AND Password='$password'";

            mysqli_query($db, $query) or die('<script type="text/javascript">
               alert("You are not Registered,Please register first");
               window.location = "studentregister.php";
           </script>');

            break;
    }
    ?>
    <script type="text/javascript">
        alert("Student Login Successfully");
        window.location = "studentDash.php";
    </script>



</body>