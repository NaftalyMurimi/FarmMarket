<?php

include('includes/dbconnect.php');
// $sql="SELECT * FROM product";
// $res=mysqli_query($con,$sql) or die(mysqli_error($con));
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produce</title>
    <link rel="css/layout.css" type="text/css" href="">
    
    <!-- <link rel="stylesheet" type="text/css" href="../css/project.css"> -->
   
   <body>
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




.s200:hover { background: #5cd6ed; color: #fff; border-color: #5cd6ed; cursor: pointer; }





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
<?php
//while($row=mysqli_fetch_assoc($res))
{
  
   
   //  echo "<h6>".$row['product']."</h6><br />";
   //  echo "<p>".$row['quantity']."</p>";
   //  echo "<p>".$row['date']."</p>";
   //  echo "<p>".$row['location']."</p>";
   //  echo "<p>".$row['contact']."</p>";
   //  echo "<img loading='lazy' src='https://www.offensive-security.com/wp-content/uploads/2021/11/SOC-200-white.svg' alt='SOC-200' 
   //  style='width:100px; height:100px; ' /></a>";
     
     
   //  echo "</div>";
    

}
//mysqli_close($con);
?>
<?php }?>
</div>
</body>
</html>