<?php
require("common.php");

if (!isset($_SESSION['email'])) {
    header('location: admins.php');
}
$msg= ' ';
if(isset($_POST['submit'])) { 
    $new=$_POST['new'];
    $cnm=$_POST['cnm'];
    if($new == $cnm)
    {
    $result = mysqli_query($con, "SELECT * from admin WHERE admin_id='" .$_SESSION['admin_id'] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["old"] == $row["password"]) {
        mysqli_query($con, "UPDATE admin set password='" . $_POST["new"] . "' WHERE admin_id='" . $_SESSION["admin_id"] . "'");
        $msg= "Password Changed";
    } else
        $msg = "Current Password is not correct";
    }else
        $msg="enter correct passwords"; 
        

}
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

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </body>
</html>

    

