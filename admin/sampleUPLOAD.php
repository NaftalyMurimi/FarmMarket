<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
if (strlen($_SESSION['lecuid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit'])&&$_FILES['userfile']['size']>0)
  {
 $userid=$_SESSION['lecuid'];
 //echo "working now";
 $author = $_POST['author'];
 $category = $_POST['category'];
 $description = $_POST['description'];
        $fileName = $_FILES['userfile']['name'];
        $tmpName  = $_FILES['userfile']['tmp_name'];
        $fileSize = $_FILES['userfile']['size'];
        $fileType = $_FILES['userfile']['type'];
        $fileType=mysqli_real_escape_string($con,
        stripslashes ($fileType));
        $fp      = fopen($tmpName, 'r');
        $content = fread($fp, filesize($tmpName));
        // $content = addslashes($content);
        fclose($fp);
        $fileName = addslashes($fileName);
        if($con){
       
        $query = "INSERT INTO `sample_file`(`id`, `UserID`, `File`, `Author`, `Category`, `FileSize`) VALUES ('null','$userid','$fileName','$author',' $category ','$fileSize')";
        mysqli_query($con,$query) or die('Error, query failed'); 
        mysqli_close($con);
        $msg="You have submitted your project successfully.";
        }
        else { 
         // header('location:../View/View.php');   
        	$msg1="Failed!!!! Try again.";
        }
   
}



}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lecturer</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	<style type="text/css">
		/*.rowupload{
			background-image: url(../assets/upload.jpg);
			height: 500px;
			position: absolute;
		}
		.rowupload:hover{ display:none}*/
		
		
	</style>
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
				<li class="active">Sample Project File</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row ">
			<div class="col-lg-12 ">
			
				
				
				<div class="panel panel-default seeupload ">
					<div class="rowupload">
					</div>
					<div class="panel-heading">Upload File</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
   					echo $msg;}  ?> </p>
  					<p style="font-size:16px; color:red" align="center"> <?php if($msg1){
   					echo $msg1;}  ?> </p>
						<div class="col-md-12">
							
<form name="Myform" id="Myform" action="" method="post" enctype="multipart/form-data">
 
    <div class="col-md-8">
    <label for="name" class="form-label">Author:</label>
    <input type="text" class="form-control"  name="author" readonly=true value="Lecturer">
    </div>
  
 
  <div class="col-md-8">
  <label for="phone" class="form-label">Category:</label>
  <input type="text" class="form-control"  name="category">
  
</div>

   
   
  <div class="col-md-8">
    <label for="file" class="form-label">Sample Project File:</label>
    <input type="file" class="form-control"  name="userfile">
  </div>



   
  
  
  
  <div class="col-md-6">

      <button type="submit" class="btn btn-primary" name ="submit" style="margin-top: 10px">Submit </button>
  </div>
        
    </form>     

						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<?php include_once('includes/footer.php');?>
		</div><!-- /.row -->
	</div><!--/.main-->
	</div> <!-- the upload -->
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
