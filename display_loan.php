<?php 
require("common.php");
$q=mysqli_query($con,"select * from loan");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No any Loan Records exists !!!</h2>";
echo "<a style='text-decoration:underline' href='add_loan.php?page=add_loan'>Allot New Loan ?</a>";
}
else
{
?>
<script>
	function Deleteloan(id)
	{
		if(confirm("You want to delete this Record ?"))
		{
		window.location.href="delete_loan_record.php?id="+id;
		}
	}
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Financial Solutions - Apply Home Loan | Car Loan | Personal Loan | Business Loan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="css/carousel.css" rel="stylesheet">
  <link rel="stylesheet" href="css/royalslider.css">
  <link rel="stylesheet" href="css/bootstrap.mi.css">
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
<h2 style="color:#00FFCC;text-decoration:underline" align="center">All Loan Details</h2>
<link rel="stylesheet" href="css/bootstrap.mi.css">
<table class="table table-bordered">
	<tr>
		<form method="post" action="search_loan.php?page=search_loan">
		<td colspan="7">
		<select name="seachLoan" class="form-control" required>
			<option value="">Select Group</option>
			<?php 
$q1=mysqli_query($con,"select * from groups");
while($r1=mysqli_fetch_assoc($q1))
{
echo "<option value='".$r1['group_id']."'>".$r1['group_name']."</option>";
}
			?>
		</select>
		</td>
		<td colspan="5">
		<input type="submit" value="Search Loan" name="sub" class="btn btn-success" />
		</td>
		</form>
	</tr>
	<tr>
		<td colspan="12">
		
		<a title="Add New Loan Records" href="add_loan.php?page=add_loan"><span class="glyphicon glyphicon-plus"</a>
		&nbsp; &nbsp; 
		
		<a title="Print all Loan Records" href="print_loan_record.php"><span class="glyphicon glyphicon-print"</a>
		
		</td>
	</tr>
	
		<?php
         error_reporting(1);
         $rec_limit =10;
         
         /* Get total number of records */
        
		 $sql = "SELECT count(loan_id) FROM loan ";
         $retval = mysqli_query($con,$sql);
         
         if(! $retval )
		  {
            die('Could not get data: ' . mysqli_error());
         }
         $row = mysqli_fetch_array($retval, MYSQL_NUM );
         $rec_count = $row[0];
         
         if( isset($_GET{'pagi'} ) ) {
            $pagi = $_GET{'pagi'} + 1;
            $offset = $rec_limit * $pagi ;
         }else {
            $pagi = 0;
            $offset = 0;
         }
         
		 
         $left_rec = $rec_count - ($pagi * $rec_limit);
         $sql = "SELECT * ". "FROM loan ".
            "LIMIT $offset, $rec_limit";
            
         $retval = mysqli_query($con, $sql);
         
         if(! $retval )
		  {
            die('Could not get data: ' . mysqli_error());
         }
         
         $inc=1;
		 while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
		  {
		  
           echo "<Tr>";
echo "<td>".$inc."</td>";


$q1=mysqli_query($con,"select * from groups where group_id='".$row['group_id']."'");
$r1=mysqli_fetch_assoc($q1);

echo "<td>".$r1['group_name']."</td>";

echo "<td>".$row['loan_come_from']."</td>";
echo "<td>".$row['loan_amount']."</td>";
echo "<td>".$row['loan_interest']."</td>";
echo "<td>".$row['payment_term']."</td>";
echo "<td>".$row['total_payment_with_intereset']."</td>";
echo "<td>".$row['emi_per_month']."</td>";
echo "<td>".$row['payment_schedule']."</td>";
echo "<td>".$row['due_date']."</td>";

        
         

?>

<Td><a href="javascript:Deleteloan('<?php echo $row['loan_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>

<Td><a href="admins.php?page=update_loan_record&loan_id=<?php echo $row['loan_id']; ?>" style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>



<?php 

echo "</Tr>";
$inc++;
}

?>




		
		
</table>
<?php }?>