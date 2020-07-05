<?php
require("common.php");
if (isset($_SESSION['email'])) {
    header('location:user_homepage.php');
}

$msg= ' ';



       if(isset($_POST['submit'])) {
            $email = $_POST['email'];
            $email = mysqli_real_escape_string($con, $email);
            $password = $_POST['password'];
            $password = mysqli_real_escape_string($con, $password);
            $query = "SELECT cust_id, email FROM customer WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
 $msg = "Invalid E-mail id or Password";
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['cust_id'] = $row['cust_id'];
  header('location: user_homepage.php');
}
       }
        
// Query checks if the email and password are present in the database.
?>


<!DOCTYPE html>
<html>
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Solutions - Apply Home Loan | Car Loan | Personal Loan | Business Loan</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=AlfaSlabOne' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=fantasy' rel='stylesheet'>
     <link href='https://fonts.googleapis.com/css?family=Artifika' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
  
  </head>
  <body>
 <marquee behavior="alternate" scrol lamount="6" style="background-color: plum velvet;font-family: 'fantasy';font-size: 30px;;height: 1.4em;">EASY MONEY !!!FINANCE ON YOUR TERMS...</marquee><br>
 <br>


 <br><br><br><br>
 <br>
 <body style="background:#CCCCCC">

<div class="container" >
    <div class="row" style="margin-top:20px">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <form action=" " method="post">
                   
                   <?php if($msg != ' '): ?>
                   <div id="eror" style="color:rgb(255,0,0);font-size: 16px;font-weight: bolder;"><?php echo $msg; ?></div>
                   <?php endif; ?>

                <div class="panel-body">
                    
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" name="email" type="email" autofocus required placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" required>
                            </div>
                            
                            
            <div class="form-group">
                                <input name="submit" type="submit" value="signin" class="btn btn-lg btn-success btn-block">
                            </div>
                                                            
            <div class="form-group">
                            <a href="signup.php"><input type="button" id="register_btn" class="btn btn-lg btn-success btn-block" value="register">
                            </div>
</form>
</div>
</body>
</html>
