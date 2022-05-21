<!-- This is buyer's  dashboard -->
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
    <title>Buyer</title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/datepicker3.css" rel="stylesheet">
    
</head>
<body style="background-color: #063146;">
    <?php
$uid=$_SESSION['buyerid'];
$ret=mysqli_query($con,"select user_name from buyer where id='$uid'");
$row=mysqli_fetch_array($ret);
$name=$row['user_name'];

?>
   <nav id="top" class="navbar navbar-custom navbar-fixed-top" role="navigation" >
      
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-h-square"></em>
        </a></li>
        <li class="active">Welcome.. <i><?php echo $name; ?></i></li> 
        <li style="float: right;"><a href="../logout.php"><em class="fa fa-user-md"></em>&nbsp Logout</a> </li>

      </ol>
    
        
        <!-- /.container-fluid -->
    </nav>
    <div style="margin-top:30px;">
        <!-- view all farmproduce -->
    <?php include_once"../allPRODUCT.php"?>

    </div>
    </body>
</html>