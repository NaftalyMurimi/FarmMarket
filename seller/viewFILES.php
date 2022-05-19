
  <?php  
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['studentuid']==0)) {
  header('location:logout.php');
  } else{

//code deletion
if(isset($_GET['delid']))
{
$rowid=intval($_GET['delid']);
$query=mysqli_query($con,"delete from documents where id='$rowid'");
if($query){
echo "<script>alert('Record successfully deleted');</script>";
echo "<script>window.location.href='viewFILEs.php'</script>";
} else {
echo "<script>alert('Something went wrong. Please try again');</script>";

}

}}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
</head>
<body>
	<?php include_once('../includes/header.php');?>
	<?php include_once('../includes/sidebarSTUDENT.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Projects</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Submitted Projects</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
   					echo $msg;}?> </p>
						<div class="col-md-12">
							
							
            <table class="table table-dark table-hover">
             
                <tr>
                  <th>S.NO</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Description</th>
                  <th>FileSize</th>
                  <th>Action</th>
                </tr>
            
<?php
$userid=$_SESSION['studentuid'];
$ret=mysqli_query($con,"select * from documents where UserID='$userid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
             
                <tr>
       						<td><?php echo $cnt;?></td>
              		<td><?php  echo $row['Title'];?></td>
                  <td><?php  echo $row['Description'];?></td>
                  <td><?php  echo $row['File'];?></td>
                  <td><?php  echo $row['FileSize']. " Kb";?></td>
                  <td><a href="viewFILES.php?delid=<?php echo $row['ID'];?>">Delete</a>
                </tr>
<?php 
$cnt=$cnt+1;
}?>
                 </table>
          </div>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
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
