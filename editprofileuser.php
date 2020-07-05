<?php
require("common.php");
if(!isset($_SESSION['email'])) {
    header('location: user_homepage.php');
}
$msg=' ';
  $result = mysqli_query($con, "SELECT * from customer WHERE cust_id='" .$_SESSION['cust_id'] . "'");
    $row = mysqli_fetch_array($result);      
       
    if(isset($_POST['submit'])){
      $name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);
  
  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

   $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $accountno = $_POST['accountno'];
  $accountno = mysqli_real_escape_string($con, $accountno);
  
  mysqli_query($con, "UPDATE `customer` SET `name`='$name' ,`contact`='$contact',`email`='$email',`accountno`='$accountno' WHERE cust_id='".$_SESSION['cust_id']. "'");
        $msg= "UPDATED";
    }
 ?>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Solutions - Apply Home Loan | Car Loan | Personal Loan | Business Loan</title>
    <link rel="stylesheet" href="css/caraousel.css">
    <link href='https://fonts.googleapis.com/css?family=Chau Philomene One' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
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
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICES<span class="fa fa-caret-down"></span></a>
            <ul class="dropdown-menu">
                <li><a href="viewcustomers.php">HOME LOAN</a></li>
                <li><a href="viewemployee.php">CAR LOAN</a></li>
                <li><a href="viewemployee.php">EDUCATION LOAN</a></li>
                <li><a href="viewemployee.php">PERSONAL  LOAN</a></li>
                <li><a href="viewemployee.php">BUSINESS LOAN</a></li>
            </ul>
          </li>
          
                <li><a href="apply.php">APPLY NOW</a></li>
              <li><a href="employeeregister.php">CHECK STATUS</a></li>
            </ul>
      <ul class="nav navbar-nav navbar-right" >
          
 <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user"></span> SETTINGS<span class="fa fa-caret-down"></span></a>
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
      
       
        <h1  class="col-sm-offset-1" id="editpro">EDIT PROFILE</h1></div>
        <div class="editprofile">
        <form class="container form-horizontal" action=" " method="post">
            
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">NAME :</label>
    <div class="col-sm-6">
        <input type="text" class="col-sm-10" id="name" name="name" value="<?php echo $row["name"]; ?>" required>
    </div>
  </div>
        <div class="form-group">
    <label class="control-label col-sm-2" for="email">EMAIL :</label>
    <div class="col-sm-6">
        <input type="email" class="col-sm-10" id="email" name="email"  value="<?php echo $row["email"]; ?>" required>
    </div>
  </div>
  
            <div class="form-group">
    <label class="control-label col-sm-2" for="contact">CONTACT :</label>
    <div class="col-sm-6">
        <input type="text" class="col-sm-10" id="contact" name="contact"  value="<?php echo $row["contact"]; ?>" required>
    </div>
  </div>
           
 
  <div class="form-group">
    <label class="control-label col-sm-2" for="accountno">ACCOUNT NO:</label>
    <div class="col-sm-6">
        <input type="text" class="col-sm-10" id="accountno" name="accountno"  value="<?php echo $row["accountno"]; ?>" required>
    </div>
  </div>
            
            
  <div class="form-group"> 
    <div class="col-sm-offset-3 col-sm-10">
        <input type="submit" class="btn btn-success btn-lg" name="submit" value="SUBMIT">
        
    </div>
  </div>
             <?php if($msg != ' '): ?>
                   <div style="color: green;font-size: 50px;font-family:'Baloo Thambi'; "><?php echo $msg; ?></div>
                   <?php endif; ?>
                 
</form>
           
        </div>
    </div>
      
      
  
 

  </body>
</html>
