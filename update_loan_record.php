<?php 
require("common.php");
extract($_POST);
if(isset($save))
{

mysqli_query($con,"update loan set group_id='$group',loan_come_from='$source',loan_amount='$amount',payment_schedule='$payment',due_date='$due'");
		
$err="<font color='blue'>Loan records updated</font>";
		
}

$sql=mysqli_query($con,"select * from loan where loan_id='".$_GET['loan_id']."'");
$res=mysqli_fetch_array($sql);
//print_r($res);
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
<h2 align="center" style="color:red;text-decoration:underline">Update Allotted Loan Records</h2>
<link rel="stylesheet" href="css/bootstrap.mi.css">
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Select Group</div>
		<div class="col-sm-5">
		<select name="group" class="form-control" required>
			<option value="">Select Group</option>
			<?php 
$q1=mysqli_query($con,"select * from groups");
while($r1=mysqli_fetch_assoc($q1))
{
?>
<option <?php if($res['group_id']==$r1['group_id']){echo "selected";} ?> 
value="<?php echo  $r1['group_id'];?> "><?php echo $r1['group_name']; ?></option>
<?php 
}
			?>
		</select>
		</div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Loan Source</div>
		<div class="col-sm-5">
		<select name="source" class="form-control" required>
			<option value="">Select Loan Coming Source</option>
			<option <?php if($res['loan_come_from']=="Government"){echo "selected";} ?>>Government</option>
			<option <?php if($res['loan_come_from']=="Council"){echo "selected";} ?>>Council</option>
		</select>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Loan Amount</div>
		<div class="col-sm-5">
		<input type="number" value="<?php echo $res['loan_amount']; ?>" name="amount" class="form-control" required/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Loan Interest</div>
		<div class="col-sm-5">
		<input type="text"  name="intereset" class="form-control" required/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Payment Schedule</div>
		<div class="col-sm-5">
		<input type="date" value="<?php echo $res['payment_schedule']; ?>" name="payment" class="form-control"  required/>
	
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Payment Due Date</div>
		<div class="col-sm-5">
		<input type="date" value="<?php echo $res['due_date']; ?>" name="due" class="form-control" required/>
	
		</div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
<input type="submit" value="Allowt New Loan" name="save" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	