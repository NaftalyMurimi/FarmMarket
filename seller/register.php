<?php 
session_start();
error_reporting(0);
include('../includes/dbconnect.php');
if(isset($_POST['submit']))
  {
    $username=$_POST['username'];
    $nationalid=$_POST['nationalid'];
    $Phone_no=$_POST['Phone_no'];
    $gender=$_POST['gender'];
    $location=$_POST['location'];



    $ret=mysqli_query($con, "select nationalid from seller where nationalid='$nationalid' ");
    $result=mysqli_fetch_array($ret);
    if($result>0){
$msg="This National Id is  associated with another account";
    }
    else{
    $query=mysqli_query($con, "INSERT INTO `seller`(`id`, `user_name`, `nationalid`, `Phone_no`, `Gender`, `location`) VALUES ('null','$username','$nationalid','$Phone_no','$gender','$location')");
    if ($query) {
    $msg="You have successfully registered";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seller - Signup</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">

<body>
	<div class="row">
			<h2 align="center">Seller - Signup</h2>
	<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Sign Up</div>
				<div class="panel-body">
					<form role="form" action="" method="post" id="" name="signup" onsubmit="return checkpass();">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Full Name" name="username" type="text" required="true">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="National Id" name="nationalid" type="number" required="true">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" maxlength="10" pattern="[0-9]{10}" required="true">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Gender" name="gender" type="text" value="" required="true">
							</div>
							<div class="form-group">
								<input type="text" class="form-control"  name="location" placeholder="Location" required="true">
							</div>
							<div class="checkbox">
								<button type="submit" value="submit" name="submit" class="btn btn-primary">Register</button><span style="padding-left:250px">
								<a href="login.php" class="btn btn-primary">Login</a></span>
							</div>
							 </fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
