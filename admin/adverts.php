<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit'])//&&$_FILES['userfile']['size']>0
)
  {
 //$userid=$_SESSION['sellerid'];
 //echo "working now";
 $company = $_POST['company'];
 $advert = $_POST['advert'];
 $Description = $_POST['Description'];
 $price = $_POST['price'];
 $contact = $_POST['contactphone'];
 
          $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
          $image_name= addslashes($_FILES['image']['name']);
          $image_size= getimagesize($_FILES['image']['tmp_name']);
    
          move_uploaded_file($_FILES["image"]["tmp_name"],"../adverts/" . $_FILES["image"]["name"]);      
          $upimage="../adverts/" . $_FILES["image"]["name"];
          
          
          $con->query("INSERT INTO `adverts`(`id`, `company`, `advertImage`, `advert`, `contact`, `Description`, `Price`) VALUES ('null','$company','$upimage','$advert','$contact','$Description','$price')")or die(mysql_error());
        $msg="You have submitted your product items successfully.";
        }
        else { 
         // header('location:../View/View.php');   
       // $msg1="Failed!!!! Try again.";

        }
   
}



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
        <li class="active">Add Adverts</li>
      </ol>
    </div><!--/.row-->
    
    
        
    
    <div class="row ">
      <div class="col-lg-12 ">
      
        
        
        <div class="panel panel-default  ">
          <div class="rowupload">
          </div>
          <div class="panel-heading">Advert Upload File</div>
          <div class="panel-body">
            <p style="font-size:16px; color:green;" align="center"> <?php if($msg){
            echo $msg;}  ?> </p>
            <p style="font-size:16px; color:red" align="center"> <?php if($msg1){
            echo $msg1;}  ?> </p>
            <div class="col-md-12">
              
<form name="Myform" id="Myform" action="" method="post" enctype="multipart/form-data">
  <div class="col-md-6">
  <label for="quantity" class="form-label">Advert Name:</label>
  <input type="text" class="form-control"  name="advert" placeholder="Eg. XYZ Herbicide">
  
</div>
    <div class="col-md-6">
    <label for="name" class="form-label">Company:</label>
    <input type="text" class="form-control"  name="company"  placeholder="XJF Company" >
    </div>
  
 
 
<div class="col-md-6">
  <label for="price" class="form-label">price:</label>
  <input type="text" class="form-control"  name="price" placeholder="Ksh. 340">
 </div> 
<div class="col-md-6">
  <label for="location" class="form-label">Description:</label>
  <input type="text" class="form-control"  name="Description" placeholder="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua.">
  
</div>


<div class="col-md-6">
  <label for="info" class="form-label">Contact Phone:</label>
  <input type="number" class="form-control"  name="contactphone" placeholder="Eg. 254701234567">
 </div>

   
   
  <div class="col-md-6">
    <label for="file" class="form-label">Image:</label>
    <input type="file" class="form-control"  name="image">
  </div>



   
  
  
  
  <div class="col-md-6">

      <button type="submit" class="btn btn-primary" name ="submit" style="margin-top: 10px">Submit </button>
  </div>
        
    </form>     

            </div>
          </div>
        </div><!-- /.panel-->
      </div><!-- /.col-->
      
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

<?php 
if (isset ($_POST ['save'])){
          $position=$_POST['position'];
          $firstname=$_POST['firstname'];
          $lastname=$_POST['lastname'];
          $year_level=$_POST['year_level'];
          $gender=$_POST['gender'];
          $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
          $image_name= addslashes($_FILES['image']['name']);
          $image_size= getimagesize($_FILES['image']['tmp_name']);
    
          move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);      
          $location="upload/" . $_FILES["image"]["name"];
          
          
          $conn->query("INSERT INTO candidate(position,firstname,lastname,year_level,gender,img)values('$position','$firstname','$lastname','$year_level','$gender','$location')")or die(mysql_error());
        }           
?>
  
</body>
</html>
