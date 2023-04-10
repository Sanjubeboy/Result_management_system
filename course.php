<?php
       
       include('connection.php');

       ?>
       <body>

       <?php
       $cid=$_POST['cid'];
       $cname = $_POST['cname'];
       $des= $_POST['dex'];

   switch($_GET['action']){
       case 'cs':			
               $query = "INSERT INTO courses
               (Course_ID,Course_Name,Course_Description)
               VALUES ('".$cid."','".$cname."','".$des."')";
               mysqli_query($db,$query)or die ('<script type="text/javascript">
               alert("Course ID is already Registered,Please use another ID");
               window.location = "addcourse.php";
           </script>');
           
       break;
                   
       }
        ?>
        <script type="text/javascript">
			alert("Course Registered Successfully");
			window.location = "addcourse.php";
		</script>
        </body>
