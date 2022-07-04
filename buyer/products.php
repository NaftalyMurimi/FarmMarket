<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');
if (strlen($_SESSION['buyerid']==0)) {
  header('location:logout.php');
  } else{}
  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Buyer</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/font-awesome.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	<style>






.soc-track { 
background: greenyellow;
/*
border:solid #ddd 2px; 
border:solid #4e4e4e 2px; 
*/
border:solid #7b7996 2px; 
padding: 24px; 
border-radius: 12px; margin: 15px; width:230px; height:230px;
text-align:center;
transition: all 0.2s ease;
}
.s200 h6 { color: #5cd6ed; }
.s200:hover { background: #5cd6ed; color: #fff;
     border-color: #5cd6ed; cursor: pointer; }
.s200:hover h6 { color: #fff; }
.sh{
    font-weight: bold;
    font-size: 10px;
    float: left;
}


@media only screen and (max-width: 790px) {
    .pen-track, .web-track, .exp-track, .soc-track { 
        height:310px;
    }
}

</style>
</head>
<body>
	<?php include_once('../includes/header.php');?>
	<?php include_once('../includes/sidebarBUYER.php');?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Buyer</li>
			</ol>
		</div><!--/.row-->
	<div class="row ">
			<div class="col-lg-12 ">
		<hr/>
				
        <div style="display:flex; justify-content: center;
 width:100%; max-width:1095px; margin: 0 auto; flex-wrap: wrap;">
 
    <?php 

    $bool = false;
    $query = $con->query("SELECT * FROM product ORDER BY id DESC");
             while($row = $query->fetch_array()){
              $id=$row['id'];
               ?>

<div class='soc-track s200 home-soc-200' onclick='#'>
                <h4><span class="sh">Product:</span> <?php echo $row ['product'];?></h4>
                <p> <span class="sh">Quanity:</span>  <?php echo $row ['quantity'];?></p>
                <p><span class="sh">Due date:</span> <?php echo $row ['date'];?></p>
                <p><span class="sh">Location:</span> <?php echo $row ['location'];?></p>
              
                
                <i><span class="sh"><a href="https://api.whatsapp.com/send?phone=254.<?php echo $row ['contact'];?>&text=Hi" target='_blank'><img src="<?php echo $row['image']; ?>" width="90" height="70" class="img-rounded"></a></span></i>

</div>
<?php }?>
    
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
