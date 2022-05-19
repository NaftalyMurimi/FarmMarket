<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $lecno=$_POST['lecno'];
    $query=mysqli_query($con,"select id from lecturer where  Email='$email' && Lec_no='$lecno' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['lecuid']=$ret['id'];
     header('location:dashboardLECTURER.php');
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
	<title>Lecturer || Login</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	<style type="text/css">
        body{
           background: #063146;
        }
        h2{
        	color: white;
        }
    </style>
</head>
<body>

	<div class="row text-light bg-dark">
			<h2 align="center  ">Lecturer Login</h2>
	<hr />
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Sign In</div>
				<div class="panel-body">
					<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
					<form role="form" action="" method="post" id="" name="login">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" required="true">
							</div>
							<a href="forgot-password.php">Forgot Password?</a>
							<div class="form-group">
								<input class="form-control" placeholder="Lecturer No" name="lecno" type="text" value="" required="true">
							</div>
							<!-- <div class="form-group">
								<select class="form-control" >
									<option>Doctor</option>
									<option>Nurse</option>
									<option>Mum</option>
									<option>Clinic Admin</option>

								</select>
							</div> -->
							<div class="checkbox">
								<button type="submit" value="login" name="login" class="btn btn-primary">login</button>
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
