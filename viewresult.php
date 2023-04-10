<?php

include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Result | Student</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
</head>

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
                <a class="navbar-brand" href="studentDash.php">Student Result Management</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="studentRegister.php">Log Out</a></li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="studentDash.php">Overview <span class="sr-only">(current)</span></a></li>
                    <li><a href="viewcourse.php">View Courses</a></li>
                    <li><a href="#">View Results</a></li>

                </ul>

            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">View Result</h1>
                <form method="POST" action=" ">
                    <div class="form-group row">
                        <label for="student id" class="col-sm-2 col-form-label">Student ID</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="sid" id="sid" placeholder="Student ID" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cname" class="col-sm-2 col-form-label">Course Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="cname" id="cname" placeholder="Course Name" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">View Course </button>
                </form>


                <h2 class="sub-header">All Courses</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Course_Name</th>
                                <th>Subject 1</th>
                                <th>Subject 2</th>
                                <th>Subject 3</th>
                                <th>Subject 4</th>
                                <th>Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (isset($_POST['sid']) && isset($_POST['cname'])) {
                                    $id=$_POST['sid'];
                                    $cname=$_POST['cname'];
                                $query = "SELECT * FROM result where Student_ID='$id' AND Course_Name='$cname'";

                                $result2 = mysqli_query($db, $query) or die('<script type="text/javascript">
                                alert("Result Not Found");
                                window.location = "viewresult.php";
                            </script>');
                               
                                while ($row = mysqli_fetch_array($result2)) {

                                    echo '<tr>';
                                    echo '<td>' . $row['Student_ID'] . '</td>';
                                    echo '<td>' . $row['Course_Name'] . '</td>';
                                    echo '<td>' . $row['Sub1'] . '</td>';
                                    echo '<td>' . $row['Sub2'] . '</td>';
                                    echo '<td>' . $row['Sub3'] . '</td>';
                                    echo '<td>' . $row['Sub4'] . '</td>';
                                    echo '<td>' . $row['Status'] . '</td>';
                                    echo '</tr> ';
                                }
                            }
                        
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.flexslider.js"></script>
    <script src="assets/js/scrollReveal.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>