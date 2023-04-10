<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style2.css">
    <style>

    </style>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <h3>Results</h3>
                </a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-nav pull-right">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="studentregister.php">STUDENT</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="main">
        <div class="containers">
            <div class="signup-content">
                <div class="signup-img">
                    <img style="height: 15em;" src="assets/img/teacher-img2.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form action="register.php?action=add" method="POST" class="register-form" id="register-form">
                        <h2>Teacher registration form</h2>
                        <div class="form-group">
                            <input type="number" min="1" max="20" name="id" id="uni" required />
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">First Name :</label>
                                <input type="text" name="firstname" id="firstname" required />
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last Name :</label>
                                <input type="text" name="lastname" id="lastname" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required />
                        </div>
                        <div class="form-radio">
                            <label for="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" value="Male" name="gender" id="male" checked>
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" value="Female" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">State :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value=""></option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Gujarat">Gujarat</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">City :</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                        <option value=""></option>
                                        <option value="Mumbai">Mumbai</option>
                                        <option value="Ahemdabad">Ahemdabad</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="pass" id="pass">
                        </div>
                        <div class="form-group">
                            <label for="course">Course :</label>
                            <div class="form-select">
                                <select name="course" id="course">
                                    <option value=""></option>
                                    <?php
                                    $query = 'SELECT * FROM courses';
                                    $result = mysqli_query($db, $query) or die(mysqli_error($db));

                                    while ($row = mysqli_fetch_assoc($result)) {

                                    ?>
                                        <option value="<?php echo $row['Course_Name']; ?>"><?php echo $row['Course_Name']; ?> </option>

                                    <?php
                                    }
                                    ?>
                                </select>
                                <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-submit">
                            <input type="reset" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                        <div class="form-group">
                            <label>Already Registered ?
                                <a style="font-size:16px" href="teacherlogin.php">Login Here</a>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            document.getElementById("submit").onclick = function() {
                $demo = document.getElementById("uni").value;
                if ($demo > 8) {
                    $demo.stepUp(3);
                } else {
                    $demo.stepUp(4);
                }
            }
        </script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script src="assets/js/jquery-1.10.2.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/scrollReveal.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/custom.js"></script>
</body>

</html>
<?php

?>