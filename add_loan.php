<?php 
require("common.php");
extract($_POST);
if(isset($save))
{

	if($source=="" || $amount=="" || $group=="" || $payment=="" || $due=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
$sql=mysqli_query($con,"select * from loan where group_id='$group'");
$r=mysqli_num_rows($sql);
		if($r!=true)
		{
		mysqli_query($con,"insert into loan values('','$group','$source','$amount','$intereset','$payment_term','$total_paid','$emi_per_month','$payment','$due')");
		
$err="<font color='blue'>Congrates Loan allot to this Group</font>";
		}
		
		else
		{

	$err="<font color='red'>Loan already allotted to this Group</font>";
		
		}
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
<link rel="stylesheet" href="css/bootstrap.mi.css">
<h2 align="center" style="color:#00FFFF;text-decoration:underline">Allowt Loan</h2>
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
echo "<option value='".$r1['group_id']."'>".$r1['group_name']."</option>";
}
			?>
		</select>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Loan Source</div>
		<div class="col-sm-5">
		<select name="source" class="form-control" required>
			<option value="">Select Loan COming Source</option>
			<option>Government</option>
			<option>Council</option>
		</select>
		</div>
	</div>
	
	<script>
		function loanamount()
		{
		var original=document.getElementById("original").value;	
		var interest=document.getElementById("interest").value;	
		var year=document.getElementById("payment_term").value;	
		
		var interest1=(Number(original)*Number(interest)*Number(year))/100;
		var total=Number(original)+Number(interest1);
		
		var emi=total/(year*12);
		document.getElementById("total_paid").value=total;
		document.getElementById("emi_per_month").value=emi;
		
		}
	</script>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Original Amount</div>
		<div class="col-sm-5">
		<input type="number" id="original" name="amount" class="form-control" required/></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Loan Intereset(%)</div>
		<div class="col-sm-5">
		<input type="text" name="intereset" id="interest"   class="form-control" required/></div>
	</div>
	

	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Term of Payment(In Year)</div>
		<div class="col-sm-5">
		<select onchange="loanamount()" name="payment_term" id="payment_term" class="form-control" required>
			<option value="">Term of Payment</option>
			<?php
				for($i=1;$i<=10;$i++)
				{
				echo "<option value='".$i."'>".$i."</option>";
				}
			 ?>
		</select>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Total Paid(With Intereset)</div>
		<div class="col-sm-5">
		<input type="text" id="total_paid" name="total_paid" class="form-control" readonly/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Pay Every Month(Emi Per Month)</div>
		<div class="col-sm-5">
		<input type="text" id="emi_per_month" name="emi_per_month" class="form-control" readonly/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Payment Schedule</div>
		<div class="col-sm-5">
		<input type="date" name="payment" min="2016-01-01" class="form-control"  required/>
	
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Payment Due Date</div>
		<div class="col-sm-5">
		<input type="date" name="due" min="2016-01-01" class="form-control" required/>
	
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
			</body>
			</html>