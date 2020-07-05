<?php
require("common.php");

if (!isset($_SESSION['email'])) {
    header('location: admins.php');
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
  <br><br>         

          
        
    
    <section>
    
  <!--for demo wrap-->
        <h1  class="col-sm-offset-1" id="editpro">CUSTOMER DETAILS</h1></div>
  
  
  <table class="table table-bordered">
  

     
        <tr>
          <th>CUSTOMER_ID</th>
          <th>NAME</th>
          <th>EMAIL</th>
          <th>CONTACT</th>
          <th>ACCOUNT NO</th>
          <th>ADDRESS</th>
          <th>DELETE/UPDATE</th>
          
        </tr>
    
         <tbody>
     <?php
            $sqldata= mysqli_query($con,"CALL view_customers()");
           while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
                echo '<tr><td>';
                echo $row['cust_id'];
                echo '</td><td>';
                echo $row['name'];
                echo '</td><td>';
                
                echo $row['email'];
                echo '</td><td>';
               
                echo $row['contact'];
                echo '</td><td>';
                echo $row['accountno'];
                echo '</td><td>';
                echo $row['address'];
                echo '</td><td>';
               
                ?><a href="deletecustomer.php?id=<?= $row['cust_id'] ?>"><button type="button"><span class="glyphicon glyphicon-trash"></span></button></a>
         <a href="updatecustomer.php?id=<?= $row['cust_id'] ?>"><button type="button">Edit <span class="glyphicon glyphicon-edit"></span></button></a>

         <?php
     echo '</td></tr>';
           }
                    
            ?>
            </tbody>
    </table>
  </div>
</section>


<!-- follow me template -->

<script>
    $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
     <div style="float: right;" align="right" class="col-sm-4 container" id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>