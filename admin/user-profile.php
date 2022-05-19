<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['lecuid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $userid=$_SESSION['lecuid'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $phoneno=$_POST['phone_no'];

     $query=mysqli_query($con, "UPDATE `lecturer` SET `Lecturer_name`='$fullname',`Email`='$email',`Phone_No`='$phoneno' where id ='$userid'");
    if ($query) {
    $msg="User profile has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Lecturer Profile</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include_once('../includes/header.php');?>
	<?php include_once('../includes/sidebarLEC.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Profile</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Profile</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<div class="col-md-12">
							 <?php
$userid=$_SESSION['lecuid'];
$ret=mysqli_query($con,"select * from lecturer where ID='$userid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?> 
							<form role="form" method="post" action="">
								<div class="form-group">
									<label>Full Name</label>
									<input class="form-control" type="text" value="<?php  echo $row['Lecturer_name'];?>" name="fullname" required="true">
								</div>
								<div class="form-group">
									<label>Email</label>
								<input type="email" class="form-control" name="email" value="<?php  echo $row['Email'];?>" required="true">
								</div>
								
								<div class="form-group">
									<label>Lecturer No</label>
									<input class="form-control" type="text" value="<?php  echo $row['Lec_no'];?>" required="true" name="lecno" maxlength="10"readonly="true">
								</div>
								<div class="form-group">
									<label>Date of Entry</label>
								<input type="date" class="form-control" name="date" value="<?php  echo $row['Date_of_Entry'];?>" required="true" readonly="true">
								</div>
								<div class="form-group">
									<label>Phone No</label>
								<input type="number" class="form-control" name="phone_no" value="<?php  echo $row['Phone_No'];?>" required="true">
								</div>
								<div class="form-group">
									<label>Gender</label>
								<input type="text" class="form-control" name="gender" value="<?php  echo $row['Gender'];?>" required="true" readonly="true">
								</div>

								
								
								<div class="form-group has-success">
									<button type="submit" class="btn btn-primary" name="submit">Update</button>
								</div>
								
								
								</div>
								<?php } ?>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<?php include_once('includes/footer.php');?>
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
<?php }  ?>