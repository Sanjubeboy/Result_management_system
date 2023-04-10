<?php
       
       include('connection.php');

       ?>
       <body>

       <?php
       $id=$_POST['id'];
       $fname = $_POST['firstname'];
       $lname = $_POST['lastname'];
       $gender = $_POST['gender'];
       $address = $_POST['address'];
       $state = $_POST['state']; 
       $city = $_POST['city'];
       $password = $_POST['pass'];
       $course= $_POST['course'];
       $email = $_POST['email'];

   switch($_GET['action']){
       case 'add':			
               $query = "INSERT INTO teacher
               (ID,Firstname, Lastname,Address,Gender,State,City,Password,Course,Email)
               VALUES ('".$id."','".$fname."','".$lname."','".$address."','".$gender."','$state','".$city."','".$password."','".$course."','".$email."')";
               mysqli_query($db,$query)or die ('<script type="text/javascript">
               alert("Teacher ID is already Registered,Please use another ID");
               window.location = "teacherRegister.php";
           </script>');
           
       break;
                   
       }
        ?>
        <script type="text/javascript">
			alert("Teacher Registered Successfully");
			window.location = "teacherlogin.php";
		</script>
        </body>
