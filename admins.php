<?php
require("common.php");

if (!isset($_SESSION['email'])) {
    header('location: admin_login.php');
}

        $count= "select * from customer";
        $result= mysqli_query($con, $count);
        $num = mysqli_num_rows($result);

        ?>


<?php 
@$page=  $_GET['page'];
  if($page!="")
  {
    if($page=="customerregister")
  {
    include('customerregister.php');
  
  }
    
  if($page=="viewcustomers")
  {
    include('viewcustomers.php');
  
  }
 
  
  
  if($page=="updatecustomer")
  {
    include('updatecustomer.php');
  
  }
  
  if($page=="add_loan")
  {
    include('add_loan.php');
  
  }
  
  if($page=="display_loan")
  {
    include('display_loan.php');
  
  }
  
  if($page=="search_loan")
  {
    include('search_loan.php');
  
  }
  
  if($page=="update_loan_record")
  {
    include('update_loan_record.php');
  
  }
  
  

  
 
  
  if($page=="changepassword")
  {
    include('changepassword.php');
  
  }
  
  if($page=="logout")
  {
    include('logout.php');
  
  }
  
  
  
  
  }
  
  
  ?>
  

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Financial Solutions - Apply Home Loan | Car Loan | Personal Loan | Business Loan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="css/dashboard.css" rel="stylesheet">
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
            <li class="active"><a href="admins.php">HOME</a></li>
          
            <li><a href="customerregister.php?page=customerregister">REGISTERATION</a></li>
        
<li><a href="viewcustomers.php?page=viewcustomers"><span class="glyphicon glyphicon-user"></span>  Members</a></li>
<li><a href="display_loan.php?page=display_loan"><span class="glyphicon glyphicon-euro"></span> Loan</a></li>


        </ul>
        <ul class="nav navbar-nav navbar-right">
           
        <li><a href="changepassword.php?page=changepassword"><span class="glyphicon glyphicon-lock"></span> Update Password</a></li>


          <li><a href="logout.php?page=logout"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/loann.jpg" alt="loan">
        
      </div>

      
    


<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <img class="img-circle" src="images/bui.png" alt="Generic placeholder image" width="140" height="140">
      <h5>Business Loan</h5>
      <p>Get Small Business Loans credited to your Bank in just 48 hours. Apply Online. Draw Cash Instantly. Minimal Documentation with interest rates starting @13%.</p>
     
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="images/edu.png" alt="Generic placeholder image" width="140" height="140">
      <h5>Education Loan</h5>
      <p>Apply for an Education Loan Online for further studies in India or abroad. Loan offers Student Loans up-to 25 Lacs with interest rates starting @7%.</p>
      
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="images/per.png" alt="Generic placeholder image" width="140" height="140">
      <h5>Personal Loan</h5>
          <p>A standard term loan is a fixed loan amount that you borrow as a lumpsum. It is availed at a fixed rate of interest and must be repaid over a specific tenor with interest rates  starting @9%.</p>
      
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
  <!-- FOOTER -->
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>

</div><!-- /.container -->

  
  

        
      </ul>
     
     
    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <!-- container-->


     
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
<script src="../js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
       