<?php

require("common.php");

$name = $email = $accountno = $password = $con_pass="";
$emai_err= $password_err=  $con_pass_err="";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
 //taking the input from the post req   
$name = $_POST["name"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$accountno = $_POST["accountno"];

//checking if email field ids checked
   if(isset($_POST["email"])){
         $sql ="SELECT cust_id FROM `customer` WHERE email='$email'";//query to check if email exits
        $result = mysqli_query($con,$sql);
        if(mysqli_num_rows($result)>0){ //
            $emai_err = "Email already exist";
        }
        else{ 
            // if does not exit 
            if(strlen(trim($_POST["password"]))<6){ //checking wheatrher password is 
                $password_err = "Password must have atleast 6 charecters.";
            }
            else{
                $password = $_POST["password"];
            }
            
            $con_pass = $_POST["con_pass"];
            if($password != $con_pass){ // checking password matches or not
                $con_pass_err = "Password did not match";
            }
       
    
            if(empty($emai_err) && empty($password_err) && empty($con_pass_err))
            {
                $sql = "INSERT INTO customer(name,email,contact,accountno,password) VALUES(?,?,?,?,?)";
                if($stmt = mysqli_prepare($con, $sql)){
            // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "sssss", $param_name,$param_email,$param_contact,$param_accountno,$param_password);
            
            // Set parameters
                    $param_name = $name;
                    $param_email = $email;
                    $param_contact = $contact;
                    $param_accountno = $accountno;
                    $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                    // Redirect to login page
                    echo '<script>alert("registered successfully!!");</script>';
                    echo '<script>window.location="user_index.php"</script>';
                    }
                    else{
                        echo "Something went wrong. Please try again later.";
                         }   

                } 
            }       
        }
    }
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>


    <style>
    

#main_wrapper{
    text-align: center;
    width:350px;
    margin:0 auto;
    background:white;
    padding:5px;
    border-radius:2px solid #0c7ae9;
  }
.login_emo{
    text-align: center;
    width: 150px;
    text-align:center;
  }
.form{
    text-align: center;
    width:250px;
    margin:0 auto;
    border-style: solid;
  }
.inputvalues{
    text-align: center;
    width:230px;
    margin:0 auto;
    padding:5px;
  }
</style>
</head>
<body style="background-image: url(images/wp.png) ;">
<div id="main_wrapper">
    <h1>Signup</h1>
    <img src="images/use.png" class="login_emo"><br>
    <form method="POST">
    <label >Name:</label><br>
    <input type="text" name="name" class="inputvalues" required>
    <br><br>
    <label >Email:</label><br>
    <input type="email" name="email" id="" class="inputvalues" required>
    <br><br>
    <span><?php echo $emai_err; ?></span>
    <label >Contact:</label><br>
    <input type="contact" name="contact" id="" class="inputvalues" required>
    <br><br>
    <label >Account no:</label><br>
    <input type="account no" name="accountno" id="" class="inputvalues" required>
    <br><br>
    
    <label >Password:</label><br>
    <input type="password" name="password" id="" class="inputvalues" required>
    <br><br>
   
    
    <span><?php echo $password_err; ?></span>
    <label for="">Confirm Password:</label><br>
    <input type="password" name="con_pass" id="" class="inputvalues" required>
    <br><br>
    <span><?php echo $con_pass_err;?></span>
    <input type="submit" value="Submit">
    </form>
</div>
    <script>

</style>

</body>
</html>





