<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');

if(isset($_POST['login']))
  {
    $username=$_POST['username'];
    $nationalid=$_POST['nationalid'];
    $query=mysqli_query($con,"select id from seller where  user_name='$username' && nationalid='$nationalid' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['sellerid']=$ret['id'];
     header('location:dashboardSELLER.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seller || Login</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	<style type="text/css">
        body{
           background: white;
        }
        h2{
        	color: white;
        }
    </style>
</head>
<body>

	<div class="row text-light bg-dark">
			<h2 align="center  ">Seller Login</h2>
	<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Sign In</div>
				<div class="panel-body">
					<p style="font-size:16px; color:red" align="center"> <?
					php if($msg){
   echo $msg;
  }  ?> </p>
					<form role="form" action="" method="post" id="" name="login">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="username" type="text" autofocus="" required="true">
							</div>
							<a href="forgot-password.php">Forgot Password?</a>
							<div class="form-group">
								<input class="form-control" placeholder="National ID" name="nationalid" type="number" value="" required="true">
							</div>
						
							<div class="checkbox">
								<button type="submit" value="login" name="login" class="btn btn-primary">login</button><span style="padding-left:250px">
								<a href="register.php" class="btn btn-primary">Register</a></span>
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
