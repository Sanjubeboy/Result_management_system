<?php
include('connection.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Student Result | Index</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flexslider.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
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
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#features-sec">FEATURES</a></li>
                    <li><a href="#faculty-sec">FACULTY</a></li>
                </ul>
            </div>

        </div>
    </div>
 
    <div class="home-sec" id="home">
        <div class="overlay">
            <div class="container">
                <div class="row text-center ">

                    <div class="col-lg-12  col-md-12 col-sm-12">

                        <div class="flexslider set-flexi" id="main-section">
                            <ul class="slides move-me">
                                
                                <li>
                                    <h3>MANAGEMENT SYSTEM</h3>
                                    <h1>Student Result</h1>
                                    <a href="teacherRegister.php" class="btn btn-info btn-lg">
                                        TEACHER
                                    </a>
                                    <a href="studentregister.php" class="btn btn-success btn-lg">
                                        STUDENT
                                    </a>
                                </li>
                               

                               
                                <li>
                                    <h3>STUDENT RESULT</h3>
                                    <h1>MANAGEMENT SYSTEM</h1>
                                    <a href="teacherRegister.php" class="btn btn-primary btn-lg">
                                        TEACHER
                                    </a>
                                    <a href="studentregister.php" class="btn btn-danger btn-lg">
                                        STUDENT
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
   
    <div class="tag-line">
        <div class="container">
            <div class="row  text-center">

                <div class="col-lg-12  col-md-12 col-sm-12">

                    <h2 data-scroll-reveal="enter from the bottom after 0.1s"><i class="fa fa-circle-o-notch"></i>
                        WELCOME TO THE RESULT-CENTER <i class="fa fa-circle-o-notch"></i> </h2>
                </div>
            </div>
        </div>

    </div>
   
    <div id="features-sec" class="container set-pad">
        <div class="row text-center">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                <h1 data-scroll-reveal="enter from the bottom after 0.2s" class="header-line">FEATURE LIST </h1>
                <p data-scroll-reveal="enter from the bottom after 0.3s">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo.
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Aenean commodo.
                </p>
            </div>

        </div>
    


        <div class="row">


            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                <div class="about-div">
                    <i class="fa fa-paper-plane-o fa-4x icon-round-border"></i>
                    <h3>Quality Education</h3>
                    <hr />
                    <hr />
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo .

                    </p>
                    <a href="#" class="btn btn-info btn-set">ASK THE EXPERT</a>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="about-div">
                    <i class="fa fa-bolt fa-4x icon-round-border"></i>
                    <h3>SYSTEMATIC APPROACH</h3>
                    <hr />
                    <hr />
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo .

                    </p>
                    <a href="#" class="btn btn-info btn-set">ASK THE EXPERT</a>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                <div class="about-div">
                    <i class="fa fa-magic fa-4x icon-round-border"></i>
                    <h3>ONE TO ONE STUDY</h3>
                    <hr />
                    <hr />
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo .

                    </p>
                    <a href="#" class="btn btn-info btn-set">ASK THE EXPERT</a>
                </div>
            </div>


        </div>
    </div>
    
    <div id="faculty-sec">
        <div class="container set-pad">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR FACULTY </h1>
                    <p data-scroll-reveal="enter from the bottom after 0.3s">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo.
                    </p>
                </div>

            </div>
            

            <div class="row">


                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                    <div class="faculty-div">
                        <img src="assets/img/faculty/1.jpg" class="img-rounded" />
                        <h3>ROXI CHI LUENA </h3>
                        <hr />
                        <h4>Desigining <br /> Department</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo .

                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
                    <div class="faculty-div">
                        <img src="assets/img/faculty/2.jpg" class="img-rounded" />
                        <h3>JANE DEO ALEX</h3>
                        <hr />
                        <h4>Enginering <br /> Department</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo .

                        </p>
                    </div>
                </div>
                <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                    <div class="faculty-div">
                        <img src="assets/img/faculty/3.jpg" class="img-rounded" />
                        <h3>RUBY DECORSA</h3>
                        <hr />
                        <h4>Management <br /> Department</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo .

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
   
   
   
    
    <div class="container">
        <div class="row set-row-pad">
            <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 "
                data-scroll-reveal="enter from the bottom after 0.4s">

                <h2><strong>Our Location </strong></h2>
                <hr />
                <div>
                        <h4>234/80 -UFG , New Street,</h4>
                        <h4>USA</h4>
                        <h4><strong>Call:</strong>  + 67-098-907-1269</h4>
                        <h4><strong>Email: </strong>info@yourdomain.com</h4>
                    </div>


                </div>
                 <div class=" col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1"
                    data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2><strong>Social Conectivity </strong></h2>
                    <hr />
                    <div>
                        <a href="#"> <i style="font-size:24px" class="fa fa-facebook"></i> </a>
                        &emsp;<a href="#"> <i style="font-size:24px" class="fa fa-instagram"></i></a>
                        &emsp;<a href="#"> <i style="font-size:24px" class="fa fa-twitter"></i></a>
                    </div>
                </div>


            </div>
        </div>
      
        <div id="footer">
            &copy 2014 yourdomain.com | All Rights Reserved | 
        </div>
       
        <script src="assets/js/jquery-1.10.2.js"></script>
       
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/scrollReveal.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/custom.js"></script>
</body>

</html>