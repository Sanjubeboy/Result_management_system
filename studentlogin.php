<?php     
       include('connection.php');
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style2.css">
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
                    <li><a href="teacherRegister.php">TEACHER</a></li>
                </ul>
            </div>

        </div>
    </div>

    <div class="main">
        <div class="containers">
            <div class="signup-content">
                <div class="signup-img">
                    <img style="height: 12em; width:'200em' " src="assets/img/student-login.webp" alt="">
                </div>
                <div class="signup-form">
                    <form action="login2.php?action=login" method="POST" class="register-form" id="register-form">
                        <h2>Student Login form</h2>
                        
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" required/>
                            
                        </div>

                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" name="pass" id="pass" required>
                            
                        </div>
                       
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Login"
                                class="submit" name="submit" id="submit" />
                        </div>
                        <div class="form-group">
                                <label>Not Register Yet ?
                                <a style="font-size:16px" href="studentregister.php">Register Here</a>
                                </label>
                            </div>
                    </form>
                </div>
            </div>
        </div>
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