<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	
</head>
<body>
	<?php include_once('../includes/header.php');?>
	<?php include_once('../includes/sidebarADMIN.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Admin</li>
			</ol>
		</div><!--/.row-->
	<div class="row ">
			<div class="col-lg-12 ">
		<hr/>
				
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="modal-title" id="myModalLabel">         
			<div class="panel panel-primary">
			<div class="panel-heading">
			Adverts List
			</div>    
			</div>
			</h4>
     </div>
     <!-- /.panel-heading -->
         <table class="table table-dark table-hover">
       
                <tr><th>S No.</th>
            <th>Company</th>
            <th>Advert</th>
            <th>Contact</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
                </tr>
            
<?php
$userid=$_SESSION['sellerid'];
$ret=mysqli_query($con,"select * from adverts ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
             
        <tr><td><?php echo $cnt;?></td>
       	<td><?php echo $row ['company'];?></td>
        <td><?php echo $row ['advert'];?></td>
        <td><?php echo $row ['contact'];?></td>
        <td><?php echo $row ['Description'];?></td>
        <td><?php echo $row ['Price'];?></td>
        <td width="50"><img src="<?php echo $row['advertImage']; ?>" width="50" height="50" class="img-rounded"></td>
        <td style="text-align:center">
		<a rel="tooltip"  title="Delete" id="<?php  ?>" href="#delete_user" data-target="#delete_user<?php ?>" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash-o"></i> Delete</a>	
	
												
		</td>
                </tr>
<?php 
$cnt=$cnt+1;
}?>
                 </table>

                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

						<div class="col-md-12">
							
   

						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<?php include ('script.php');?>
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
