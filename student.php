<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <title>All Students</title>
</head>
<body>
    
</body>
</html>
<?php
       
       include('connection.php');

       ?>
       <body>
       <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="teacherDash.php">Student Result Management</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">        
            <li><a href="teacherRegister.php">Log Out</a></li>
          </ul>
          
        </div>
      </div>
    </nav><br><br><br>
       <div class="col-lg-12">
                        <h2>List of Students</h2> <br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                       
                                        <th>Last Name</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>State</th>
                                        <th>City</th>
                                        <th>Birth Date</th>
                                        <th>Password</th>
                                        <th>Email</th>
                                        <th>Course</th>

                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = 'SELECT * FROM student';
                    $result = mysqli_query($db, $query) or die (mysqli_error($db));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['Firstname'].'</td>';
                            echo '<td>'. $row['Lastname'].'</td>';
                            echo '<td>'. $row['Gender'].'</td>';
                            echo '<td>'. $row['Address'].'</td>';
                            echo '<td>'. $row['State'].'</td>';
                            echo '<td>'. $row['City'].'</td>';
                            echo '<td>'. $row['DOB'].'</td>';
                            echo '<td>'. $row['Password'].'</td>';
                            echo '<td>'. $row['Email'].'</td>';
                            echo '<td>'. $row['Course'].'</td>';
                            
                            echo '</tr> ';
                }
            
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
        </body>