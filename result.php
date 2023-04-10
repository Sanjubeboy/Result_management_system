<?php
       
       include('connection.php');

       ?>
       <body>

       <?php
       $rid=$_POST['rid'];
       $cname = $_POST['cname'];
       $s1 = $_POST['s1'];
       $s2 = $_POST['s2'];
       $s3 = $_POST['s3'];
       $s4 = $_POST['s4']; 
       $status = $_POST['status']; 

   switch($_GET['action']){
       case 'res':			
               $query = "SELECT ID FROM student where ID='$rid'";
              $result = $db->query($query);
               if($result->num_rows === 0) {
                
                header('location: error.php');
                } elseif($result->num_rows === 1) {
                    $query2 = "INSERT INTO result
               (Student_ID,Course_Name,Sub1,Sub2,Sub3,Sub4,Status)
               VALUES ('".$rid."','".$cname."','".$s1."','".$s2."','".$s3."','$s4','".$status."')";
                  $result2 = mysqli_query($db, $query2) or die( '<script type="text/javascript">
                  alert("Student is not Registered,Please register first");
                  window.location = "studentregister.php";
              </script>');
                }
           
       break;
                   
       }
        ?>
        <script type="text/javascript">
			alert("Result Added Successfully");
			window.location = "addresult.php";
		</script>
        </body>
