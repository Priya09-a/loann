<?php
require("common.php");
if(!isset($_SESSION['email'])) {
    header('location: user_index.php');
}
$msg= ' ';
if(isset($_POST['submit'])) { 
    $new=$_POST['new'];
    $cnm=$_POST['cnm'];
    if($new == $cnm)
    {
    $result = mysqli_query($con, "SELECT * from customer WHERE cust_id='" .$_SESSION['cust_id'] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["old"] == $row["password"]) {
        mysqli_query($con, "UPDATE customer set password='" . $_POST["new"] . "' WHERE cust_id='" . $_SESSION["cust_id"] . "'");
        $msg= "Password Changed";
    } else
        $msg = "Current Password is not correct";
    }else
        $msg="enter correct passwords"; 
        

}
?>
<html>

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
              <li><a href="status.php">CHECK STATUS</a></li>

           

          
        </ul>
        <ul class="nav navbar-nav navbar-right">
           
           <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user"></span> SETTINGS<span class="fa fa-caret-down"></span></a>
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


    
      <br><br><br><br>
    
        <h1  class="col-sm-offset-1" id="editpro">CHANGE PASSWORD</h1></div>
        <div class="changepass">
        <form class="container form-horizontal" action=" " method="post">
            
            <div class="form-group"><br>
    <label class="control-label col-sm-2" for="old">CURRENT PASSWORD:</label>
    <div class="col-sm-6">
        <input type="password" class="col-sm-10"  name="old" placeholder="enter current password" required>
    </div>
  </div>
           <div class="form-group">
    <label class="control-label col-sm-2" for="new">NEW PASSWORD:</label>
    <div class="col-sm-6">
        <input type="password" class="col-sm-10"  name="new" placeholder="enter new password" required>
    </div>
  </div>    
                <div class="form-group">
    <label class="control-label col-sm-2" for="cnm">RE-ENTER PASSWORD:</label>
    <div class="col-sm-6">
        <input type="password" class="col-sm-10"  name="cnm" placeholder="re-enter new password" required>
    </div>
  </div>
                <div class="form-group"> 
    <div class="col-sm-offset-3 col-sm-10">
        <input type="submit" class="btn btn-success btn-lg" name="submit" value="change password">
        
    </div>
  </div>
               
                 <?php if($msg != ' '): ?>
                   <div id="demo" style="color: red;"><?php echo $msg; ?></div>
                   <?php endif; ?></div>
            </form>
        </div>
        
         <div style="float: right;" align="right" class="col-sm-4 container" id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
