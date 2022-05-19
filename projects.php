<?php

include('includes/dbconnection.php');
$sql="SELECT * FROM documents";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDRSSP || projects</title>
    <link rel="css/layout.css" type="text/css" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/project.css">
    <style type="text/css">
        a{
        text-decoration: none;
    }
    </style>
  
</head>
<body>
    <!-- Navigation bar -->
    <?php include_once('includes/nav.php');?>
    <!-- search bar here -->
    
     <div class="hold">
        <div class="input-group mb-3 " style="margin:20px;">
        <input type="text" class="form-control" placeholder="Projects Title" aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary bg-info text-white" type="button" id="">Search</button>
        </div>
     </div>

 
<!-- display the projects here -->


<div class="hold">
    <table class="table table-striped bg-white table-hover " style="margin-top: 20px;">
        <tr>
            <th>S No.</th>
            <th>Title</th>
            <th>Description</th>
            
            <th>FileSize</th>
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
echo $row['Description'];
echo "</td><td>";
echo $row['FileSize'];
echo "</td><td>";
echo $row['Author'];
echo "
<td><a href=\"User/delete.php?data=".$row['id']."\">Download</a></td>
</tr>";

    
   
}
mysqli_close($con);
?>  
</div>

  
   <div class="hold" style="background-color: orangegray;">
    <h5><i>Sample Projects</i></h5>
     <?php include_once('Lecturer/sampleVIEW.php');?>

</div>



</body>
</html>