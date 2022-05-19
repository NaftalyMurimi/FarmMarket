<?php

include('includes/dbconnection.php');
$sql="SELECT * FROM sample_file";
$res=mysqli_query($con,$sql) or die(mysqli_error($con));
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample || projects</title>
    <link rel="css/layout.css" type="text/css" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="../css/project.css"> -->
   
   <body>
<style>






.soc-track { 
background: transparent;
/*
border:solid #ddd 2px; 
border:solid #4e4e4e 2px; 
*/
border:solid #7b7996 2px; 
padding: 24px; 
border-radius: 22px; margin: 15px; width:250px; height:265px;
text-align:center;
transition: all 0.2s ease;
}






.s200 h6 { color: #5cd6ed; }




.s200:hover { background: #5cd6ed; color: #fff; border-color: #5cd6ed; cursor: pointer; }





.s200:hover h6 { color: #fff; }



@media only screen and (max-width: 790px) {
    .pen-track, .web-track, .exp-track, .soc-track { 
        height:310px;
    }
}

</style>


<div style="display:flex; justify-content: center;
 width:100%; max-width:1095px; margin: 0 auto; flex-wrap: wrap;">
<?php
while($row=mysqli_fetch_assoc($res))
{
  
   echo " <div class='soc-track s200 home-soc-200' onclick='#'>";
    echo "<h6>".$row['File']."</h6><br />";
    echo "<p>".$row['Category']."</p>";
    echo "<img loading='lazy' src='https://www.offensive-security.com/wp-content/uploads/2021/11/SOC-200-white.svg' alt='SOC-200' 
    style='width:100px; height:100px; ' /></a>";
     echo "<i>".$row['Author']."</i>";
     
    echo "</div>";
    

}
mysqli_close($con);
?>
</div>
</body>
</html>