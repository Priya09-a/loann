<?php
require("common.php");

 if (!isset($_SESSION['email'])) {
    header('location: admins.php');
}
$msg=' ';
  $result = mysqli_query($con, "SELECT * from admin WHERE admin_id='" .$_SESSION['admin_id'] . "'");
    $row = mysqli_fetch_array($result);      
       
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);
  
  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

   $email = $_POST['email'];
  $email = mysqli_real_escape_string($con, $email);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);
  
  mysqli_query($con, "UPDATE `admin` SET `name`='$name' ,`email`='$email',`contact`='$contact',`address`='$address' WHERE admin_id='".$_SESSION['admin_id']. "'");
        $msg= "UPDATED";
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


<br>
<br>
<br>
<br>

    
    <div class="container-fluid " style="background:linear-gradient(#2f91b5,#caf700)">
    
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
    <label class="control-label col-sm-2" for="address">ADDRESS:</label>
    <div class="col-sm-6">
        <input type="text" class="col-sm-10" id="address" name="address"  value="<?php echo $row["address"]; ?>" required>
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
    
    
    
     <div style="float: right;" align="right" class="col-sm-4 container" id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
