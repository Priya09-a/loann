<?php
require("common.php");
if(!isset($_SESSION['email'])) {
    header('location: user_homepage.php');
}
$msgout=' ';
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Financial Solutions - Apply Home Loan | Car Loan | Personal Loan | Business Loan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="css/carousel.css" rel="stylesheet">
  <link rel="stylesheet" href="css/royalslider.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!--/.navigation bar  -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand  em-text" href="#">LOAN MANAGEMENT</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="user_homepage.php">HOME</a></li>
          
      
     
            <li><a href="about.php">ABOUT US</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="user_homepage.php">SERVICES<span class="fa fa-caret-down"></span></a>
            <ul class="dropdown-menu">
                <li><a href="homeloan.php">HOME LOAN</a></li>
                <li><a href="carloan.php">CAR LOAN</a></li>
                <li><a href="viewemployee.php">EDUCATION LOAN</a></li>
                <li><a href="viewemployee.php">PERSONAL  LOAN</a></li>
                <li><a href="viewemployee.php">BUSINESS LOAN</a></li>
            </ul>
          </li>
          
                <li><a href="apply.php">APPLY NOW</a></li>
              <li><a href="status.php">CHECK STATUS</a></li>

           

          
        </ul>
        <ul class="nav navbar-nav navbar-right">
           
           <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="user_homepage.php" ><span class="glyphicon glyphicon-user"></span> SETTINGS<span class="fa fa-caret-down"></span></a>
            <ul class="dropdown-menu">
            <li><a href="signup.php">Signup</a></li>
						  <li><a href="user_index.php">Login</a></li>
                <li><a href="editprofileuser.php">Edit profile</a></li>
                <li><a href="changepassworduser.php">Change password</a></li>

            </ul>
          </li>

          <li><a href="user_logout.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       
          <div class="carousel-inner">
      <div class="item active">
        <img src="images/carr.jpg" alt="loan">
</div>
</div>
</div>
 
       
       
    
    <!-- Home-Loan -->
    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
 
  <h1><strong>Get the @ Car Loan</strong></h1>
<p>Loan is a well known finance company based in Bangalore. We offer a wide variety of loans such as business loan, personal loan, project loan and auto loan to individuals and businesses. Our team has hands on experience in working across different domains within finance and offers advisory service to guide candidates through each stage of the application process.</p>

<ul>
 <li>Maximum period of 6 years to repay loans. The time spans may however, vary according to the lender.</li>
<li>Personalized car loans for a wide range of passenger cars with a simple uncomplicated paperwork.</li>
<li>Availability of car loans for used cars such as hatchback, sedan, MUV, SUV or any other type of luxury car.</li>
<li>Car loans for salaried as well as self employed professionals like traders and farmers who fulfill our age and income eligibility criteria.</li>
<li>Quick loan approval.</li>
<li>Affordable interest rates on car loans.</li>
<li>Up to 100% e-showroom funding and competitive interest rates on car loans.</li>
<li>Availability of numerous repay options.</li>
<li>Simple, quick loan procedures and disbursement.</li>
<li>Car loan calculator to calculate monthly payments.</li>
 </ul>
 
    <!-- FOOTER -->
    <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>&copy; 2016 Loan Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
    </footer>
    <!-- /Footer --> 
    
    <!-- Scripts --> 
    
    
</body>
</html>