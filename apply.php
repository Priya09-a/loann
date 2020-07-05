<?php
require("common.php");

if (!isset($_SESSION['email'])) {
    header('location: user_homepage.php');
}
$msg= ' ';
$msg2= ' ';
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);
  
  

   $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);
  $mobile = $_POST['mobile'];
  $mobile = mysqli_real_escape_string($con, $mobile);
  
  $state = $_POST['state'];
  $state = mysqli_real_escape_string($con, $state);
  
  $loantype = $_POST['loantype'];
  $loantype = mysqli_real_escape_string($con, $loantype);
  
  $amount = $_POST['amount'];
  $amount = mysqli_real_escape_string($con, $amount);
  
 



  $query = "SELECT * FROM apply WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $msg = "Email Already Exists";
    
  }
   else {
    
    $query = "INSERT INTO apply(name,email,mobile,state,loantype,amount)VALUES('" . $name . "','" . $email . "','" . $mobile . "','" . $state . "','" . $loantype . "','" . $amount . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    echo '<script>alert("Loan Application accepted successfully!!.Please check your mail for further details");</script>';
  echo '<script>window.location="user_index.php"</script>';
  
  
    $msg2 =" UPDATED SUCCESSFULLY";
   } 
  }

  // Redirect to login page
  
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
    <title>Form</title>
<meta charset="UTF-8" >


<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="css/carousel.css" rel="stylesheet">
  <link rel="stylesheet" href="css/royalslider.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
</head>

<!-- Header -->

<body>
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color:#a52a2a">
          <span class="icon-bar" style="background-color:#a52a2a;"></span>
          <span class="icon-bar" style="background-color:#a52a2a;"></span>
          <span class="icon-bar" style="background-color:#a52a2a;"></span>
        </button>
        <a class="navbar-brand  em-text" href="#">LOAN MANAGEMENT</a>
        </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <li class="active"><a href="user_homepage.php">HOME</a></li>
            <li><a href="about.php">ABOUT US</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="user_homepage.php">SERVICES<span class="fa fa-caret-down"></span></a>
            <ul class="dropdown-menu">
                <li><a href="viewcustomers.php">HOME LOAN</a></li>
                <li><a href="viewemployee.php">CAR LOAN</a></li>
                <li><a href="viewemployee.php">EDUCATION LOAN</a></li>
                <li><a href="viewemployee.php">PERSONAL  LOAN</a></li>
                <li><a href="viewemployee.php">BUSINESS LOAN</a></li>
            </ul>
          </li>
          
                <li><a href="apply.php">APPLY NOW</a></li>
              <li><a href="status.php">CHECK STATUS</a></li>
            </ul>
      <ul class="nav navbar-nav navbar-right" >
          
 <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="user_homepage.php" ><span class="glyphicon glyphicon-user"></span> SETTINGS<span class="fa fa-caret-down"></span></a>
            <ul class="dropdown-menu">
            <li><a href="signup.php">Signup</a></li>
						  <li><a href="user_index.php">Login</a></li>
                <li><a href="editprofileuser.php">Edit profile</a></li>
                <li><a href="changepassworduser.php">Change password</a></li>
               
            </ul>
          </li>               <li><a href="user_logout.php"><span class="glyphicon glyphicon-log-in"></span> LOGOUT</a></li>
       
        </ul>
      </div>
    </div>
  </nav>
 

  

<!-- /Header --> 
<!-- Intro -->
<section class="inner-intro section-padding dark-overlay">
  <div class="container">
    <div class="inner-text white-text z-index text-center">
      <h1>Apply Now</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="user_homepage.php">Home</a></li>
          <li class="breadcrumb-item active">Apply Now</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
<!-- /Intro --> 

<!-- Apply-Now -->
<section class="section-padding">
  <div class="container">
    <div class="gray-bg p-5">
    <form  action=" " method="post">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-label">Name	</label>
              <input type="text" class="form-control" placeholder="Name	" name="name" required>
            </div>
          </div>
       
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
          </div>
             <div class="col-lg-6">
            <div cl ass="form-group">
              <label class="form-label">Mobile</label>
              <input type="text" class="form-control" placeholder="Mobile" name="mobile" required>
            </div>
          </div>
          
          
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-label">State</label>
              <input type="text" class="form-control" placeholder="State" name="state" required>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-label">Loan Type</label>
              <select name="loantype" class="form-control">
              	<option>Home Loan</option>
              	<option>Car Loan</option>
              	<option>Education Loan</option>
              	<option>Personal Loan</option>
              	<option>Business Loan</option>
              </select>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label class="form-label">Loan Amount</label>
              <input type="text" class="form-control" placeholder="Loan Amount" name="amount" required>
            </div>
          </div>
          
        </div>
        
        <br>
        <div class="form-group">
    <center>
        <input type="submit" name="submit" value="submit" class="btn" ></center>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- /Apply-Now --> 

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>