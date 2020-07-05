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
        <img src="images/pig.jpg" alt="loan">
</div>
</div>
</div>
<section class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
                <h3>Check Status</h3>

<form action="" method="post" id="contact-form">

        <div class="row">
          
          <div class="col-lg-6">
            <div cl ass="form-group">
              <label class="form-label">Submit your Mobile No.</label>
              <input type="text" class="form-control" placeholder="Mobile" name="mobile" value="">
            </div>
          </div>
          <div class="form-group">
          <input type="submit" name="submit" value="Check Status" class="btn" style="margin-top:30px; margin-left:20px;">
          
        </div>
 </div>
</form>

            
      </div>
      <div class="col-lg-4">
        <div class="info-box">
          <div class="box-head">
            <h5>Email Support</h5>
          </div>
          <div class="box-body">
            <div class="info-list">
              <p><strong>Enquiry:</strong> <a href="info%40http_/.html">info@myloan.capital</a></p>
            </div>
          </div>
        </div>
       

 
                  
        
      </div>
    </div>
  </div>
</section>
<!-- /FAQ --> 
</body>
echo '<script>alert("A mail is sent to the registered email.Please check and reach out for further enquiries!!");</script>';

        
</html>