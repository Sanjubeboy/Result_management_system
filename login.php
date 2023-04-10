<?php
       
       include('connection.php');

       ?>
       <body>

       <?php
       
       $password = $_POST['pass'];
       $email = $_POST['email'];

   			
               $query = "SELECT Email,Password from teacher where Email='$email' AND Password='$password'";
               
               mysqli_query($db,$query)or die ('<script type="text/javascript">
               alert("You are not Registered,Please register first");
               window.location = "teacherRegister.php";
           </script>');
           
       
        ?>
        <script type="text/javascript">
			alert("Teacher Login Successfully");
			window.location = "teacherDash.php";
		</script>
        </body>
