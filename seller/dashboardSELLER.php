<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');
if (strlen($_SESSION['sellerid']==0)) {
  header('location:../logout.php');
  } else{

  

  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seller's- Dashboard</title>
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
	<?php include_once('../includes/sidebarSELLER.php');?>
	<!-- <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="../assets/download.jpg" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
               <?php
// $uid=$_SESSION['sellerid'];
// $ret=mysqli_query($con,"select user_name from seller where id='$uid'");
// $row=mysqli_fetch_array($ret);
// $name=$row['user_name'];

?>
                <div class="profile-usertitle-name"><?php echo $name; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="dashboardSELLER.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
                     
           <li class=""><a href="products.php"><em class="fa fa-calendar">&nbsp;</em>Products</a></li>
           <li class=""><a href="viewFILES.php"><em class="fa fa-calendar">&nbsp;</em>View Files</a></li>
           
 



            
            <li><a href="user-profile.php"><em class="fa fa-user">&nbsp;</em>My Profile</a></li>
            <li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

        </ul>
    </div> -->
		
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="panel panel-default">
					<div class="panel-heading"><marquee>Welcome To Student's Dashboard</marquee></div>

					<div class="panel-body">
						<h4>Here are a list of the tasks you can perform</h4>
						<ul>
							<li>Submit Project for ranking</li>
							<li> View  Already submitted projects  </li>
							
							
							<li> Change / update your personal profile  </li>
						</ul>
					</div>
	    </div>
		</div><!--/.row-->
		
		
		
		
		
		<!--/.row-->
	</div>	<!--/.main-->
	<?php include_once('../includes/footer.php');?>
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>
	
		
</body>
</html>
<?php } ?>