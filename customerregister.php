<?php
require("common.php");

if (!isset($_SESSION['email'])) {
    header('location: admins.php');
}
$msg= ' ';
$msg2= ' ';
if(isset($_POST['submit'])) {
  
  $password = $_POST['pwd'];
  $password = mysqli_real_escape_string($con, $password);
  
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);
  
  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

   $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);
  $accountno = $_POST['accountno'];
  $accountno = mysqli_real_escape_string($con, $accountno);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);
  
  $state = $_POST['state'];
  $state = mysqli_real_escape_string($con, $state);
  
 


  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM customer WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
  
  if ($num != 0) {
    $msg = "Email Already Exists";
    
  }
   else {
    
    $query = "INSERT INTO customer(password,name,contact,email,accountno,address,state)VALUES('" . $password . "','" . $name . "','" . $contact . "','" . $email. "','" . $accountno. "','" . $address . "','" . $state . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    
    
         header('location: admins.php');
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
    <div class="container regbox">
        <form  class="form-horizontal" action=" " method="post" enctype="multipart/form-data" >
            <?php if($msg != ' '): ?>
                   <div id="demo" style="color: red;"><?php echo $msg; ?></div>
                   <?php endif; ?>
  <div class="form-group">

  <br><br><br><br>
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
        <input type="text" class="col-sm-10" id="name" name="name" placeholder="Enter Name" required>
    </div>
  </div>
        
                    <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
        <input type="email" class="col-sm-10" id="email" name="email" placeholder="Email" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
        <input type="password" class="col-sm-10" id="pwd" name="pwd" placeholder="Enter password" required>
    </div>
  </div>
            <div class="form-group">
    <label class="control-label col-sm-2" for="contact">Contact:</label>
    <div class="col-sm-10">
        <input type="text" class="col-sm-10" id="contact" name="contact" placeholder="contact no" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="contact">Account no:</label>
    <div class="col-sm-10">
        <input type="text" class="col-sm-10" id="accountno" name="accountno" placeholder="accountno" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Address:</label>
    <div class="col-sm-10">
        <input type="text" class="col-sm-10" id="address" name="address" placeholder="Address" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="state">State:</label>
    <div class="col-sm-10">
        <input type="text" class="col-sm-10" id="state" name="state" placeholder="State" required>
    </div>
  </div>     
           
 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" class="btn btn-warning btn-lg" name="submit" value="SUBMIT">
    </div>
  </div>
</form>
  <?php if($msg2 != ' '): ?>
                   <div id="demo" style="color:green;"><?php echo $msg2; ?></div>
                   <?php endif; ?>       
    </div>
   
    
   
 
     <br>
     
     <?php echo "<script type='text/javascript'>alert('$msg');</script>"; ?>

     <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
