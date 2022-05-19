<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');

  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Seller</title>
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
	<?php include_once('../includes/sidebarSELLER.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Seller</li>
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
														Products List
													</div>    
												</div>
											</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                         
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Due date</th>
                                            <th>Location</th>
                                            
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
                                        <tr>
										<?php 
											require '../includes/dbconnect.php';
											$bool = false;
											$query = $con->query("SELECT * FROM product ORDER BY id DESC");
												while($row = $query->fetch_array()){
													$id=$row['id'];
										?>
											
											<td><?php echo $row ['product'];?></td>
                                            <td><?php echo $row ['quantity'];?></td>
                                            <td><?php echo $row ['date'];?></td>
                                            <td><?php echo $row ['location'];?></td>
                                            
                                            <td width="50"><img src="<?php echo $row['image']; ?>" width="50" height="50" class="img-rounded"></td>
                                            
                                            <td style="text-align:center">
											
												 <a rel="tooltip"  title="Delete" id="<?php echo $candidate_id; ?>" href="#delete_user<?php echo $candidate_id; ?>" data-target="#delete_user<?php echo $candidate_id?>" data-toggle="modal"class="btn btn-danger btn-outline"><i class="fa fa-trash-o"></i> Delete</a>	
											 <?php// include ('delete_candidate_modal.php'); ?>
												  <a rel="tooltip"  title="Edit" id="<?php echo $row['candidate_id'] ?>" href="#edit_candidate<?php echo $row['candidate_id'] ?>"  data-toggle="modal"class="btn btn-success btn-outline"><i class="fa fa-pencil"></i> Edit</a>	
												
											</td>
														
											    <?php 
													
													//require 'edit_candidate_modal.php';
												?>
                                        </tr>
										
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
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
