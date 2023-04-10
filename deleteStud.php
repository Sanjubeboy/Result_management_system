<?php
       
       include('connection.php');

       ?>
       <body>

       <?php
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $email = $_POST['email'];

   switch($_GET['action']){
       case 'del':			
               $query = "delete from student where Firstname='$fname' and Lastname='$lname' AND Email='$email'";
              
               mysqli_query($db,$query)or die ('Error in updating Database');
           
       break;
                   
       }
        ?>
        <script type="text/javascript">
			alert("Student Deleted Successfully");
			window.location = "teacherDash.php";
		</script>
        </body>
