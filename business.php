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
                <li><a href="edu.php">EDUCATION LOAN</a></li>
                <li><a href="personal.php">PERSONAL  LOAN</a></li>
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
        <img src="images/buis.jpeg" alt="loan">
</div>
</div>
</div>
    <!-- Home-Loan -->
    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
          <h2>Get the @ Business Loan</h2>
        <p>The business loan is a type of unsecured loan which is offered to self-employed individuals and companies. This includes private organizations, private limited companies, proprietors and partnership firms. A business loan is provided on the basis of total turnover and Income Tax Return filed for a few years. It is specifically meant for investment in a business. Once you apply for such a loan, you are lent a specific amount of money for a few years. The bank fixes the EMIs and interest rates over a specific period. An applicant must be in the age group of 25-65 years and have a profitable business over 2 years.</p>
        <p>A limit is offered in current account on the amount which you as a client can withdraw. The loan is offered to meet your organization’s working capital needs based on stock value and annual turnover. You won’t require any security or collateral to acquire a business loan. We will ensure that the documentation takes place in a smooth manner to ensure quick processing of the loan. The time period for loan repaym
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