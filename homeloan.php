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
                <li><a href="viewemployee.php">CAR LOAN</a></li>
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
  <br><br>
  <br><br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       
          <div class="carousel-inner">
      <div class="item active">
        <img src="images/homee.jpg" alt="loan">
</div>
</div>
</div>
    <!-- Home-Loan -->
    <section class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
             
            <h2><strong>Get the @ Home Loan</strong> </h2>
            <p>Loan is associated with reputed banks which offer home loans at affordable rates across India. The interest rate which you will need to pay for home loans can be low depending on a number of factors like the total amount you apply for, period of repayment and your profession.</p>
    
    <p>You can compare the home loan interest rates of different banks by getting in touch with us. At present, most of the banks in India are offering floating rates of interest on home loan. The ones that offer fixed interest rates are far and few. One thing that all banks have in common is that they charge interest on reduced payment. So, you will have to pay for interest charged on the principal amount out of your monthly EMIs. You can acquire quotes on low rates of interest for comparing home loans offered by different banks. Our advance home loan EMI calculator will help you find out your EMI and repayment schedule.</p>
    <h4><strong>We assist home loan applications for:-</strong> </h4>
   
    <li>Home loan purchase</li>
    
   
    <h4><strong>Benefits of our home loan plan</strong> </h4>
    <ul>
    <li>No hidden costs</li>
   
    <li>Simple, hassle free documentation</li>
    </ul>
    
            
          </div>
          
        </div>
      </div>
    </section>
    <!-- /Home-Loan --> 
    
    
    
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
       