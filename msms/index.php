<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Real Service Management System || Home Page</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js "></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js "></script>
<![endif]-->
</head>

<body>
    <?php include_once('includes/header.php');?>
   
    <!-- Slide -->

<div class="slider">
    <div class="slides active" style="background-image: url('images/slid1.png');">
        <a href="#link1" class="slide-link"></a>
    </div>
    <div class="slides" style="background-image: url('images/slid2.jpg');">
        <a href="#link2" class="slide-link"></a>
    </div>
    <div class="slides" style="background-image: url('images/slid3.png');">
        <a href="#link3" class="slide-link"></a>
    </div>

<div class="slides" style="background-image: url('images/slid4.jpg');">
        <a href="#link3" class="slide-link"></a>
    </div>

    <div class="slides" style="background-image: url('images/slidlst1.png');">
        <a href="#link3" class="slide-link"></a>
    </div>
    <!-- Navigation -->
    <div class="navigation1">
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
    </div>
</div>

<script src="script.js"></script>

    <!-- End -->
   
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 class="hero-title">Welcome to Real Service</h1>
                    <p class="hero-text">Where every event is handled with grace, professionalism, and a passion for excellence. From weddings to special occasions, we bring elegance, order, and unforgettable moments to life...</p>
                    <a href="appointment.php" class="btn btn-default">Make an Appointment</a> </div>
            </div>
        </div>
    </div>
   
    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="images/about-image.jpeg" alt="" class="img-responsive"></div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="well-block">
                        <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                        <h1><?php  echo $row['PageTitle'];?></h1>
                        <h5 class="small-title ">best experience ever</h5>
                        <p><?php  echo $row['PageDescription'];?></p><?php } ?>
                         </div>
                </div>
            </div>
        </div>
    </div>
   
   
    <?php include_once('includes/footer.php');?>
    <!-- /.footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <!-- sticky header -->
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
</body>

</html>
