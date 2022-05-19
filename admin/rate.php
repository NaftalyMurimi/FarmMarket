<?php
session_start();
error_reporting(0);
include('../includes/dbconnection.php');
$sql="SELECT * FROM documents";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Rating projects</title>
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
  <?php include_once('../includes/sidebarSTUDENT.php');?>
    
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>
        </a></li>
        <li class="active">Ratings</li>
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
             
              <form role="form" method="post" action="">
                <div class="form-group">
                  <label>Author</label>
                  <input class="form-control" type="text" value="<?php  echo $row['Author'];?>" name="author" required="true" readonly="true">
                </div>
                <div class="form-group">
                  <label>File</label>
                <input type="text" class="form-control" name="file" value="<?php  echo $row['File'];?>" required="true" readonly="true">
                </div>
                
                <div class="form-group">
                  <label>Rate</label>
                  <input class="form-control" type="text" value="<?php  echo $row['Rating'];?>" required="true" name="rating" maxlength="4">
                </div>
                

                
                
                <div class="form-group has-success">
                  <button type="submit" class="btn btn-primary" name="submit">Update</button>
                </div>
                
                
                </div>
               
              </form>
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
