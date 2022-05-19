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
                <li class="active">Projects</li>
            </ol>
        </div><!--/.row-->
        
        
                
        
        <div class="row">
            <div class="col-lg-12">
            
                
                
                <div class="panel panel-default">
                    <div class="panel-heading">Student projects</div>
                    <div class="panel-body">
                        <div class="hold">
    <table class="table table-striped bg-white table-hover seen">
        <tr>
            <th>S No.</th>
            <th>Title</th>
            <th>Rating</th>
            <th>Description</th>
            
            <th>FileSize (/1024kbs)</th>
            <th>Author</th>
            <th>Action</th>
        </tr>

<?php
while($row=mysqli_fetch_assoc($res))
{
  
   

        
    
    // echo "</div>";
echo "</td><td>";
echo $row['id'];
echo "</td><td>";
echo $row['File'];
echo "</td><td>";
echo $row['Rating'];
echo "</td><td>";
echo $row['Description'];
echo "</td><td>";
echo $row['FileSize'];
echo "</td><td>";
echo $row['Author'];
echo "
<td><a href='rate.php'>Rating</a></td>
</tr>";

    
   
}
mysqli_close($con);
?>  
<!-- Modal -->

                    </div>
                </div><!-- /.panel-->
            </div><!-- /.col-->
            <?php include_once('includes/footer.php');?>
        </div><!-- /.row -->
    </div><!--/.main-->
   
    <!-- Button trigger modal -->


<!-- Modal -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
