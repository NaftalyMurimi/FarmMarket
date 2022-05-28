<!-- This is Admin's sidebar for dashboard -->
<?php
session_start();
error_reporting(0);
include('../includes/dbconnect.php');
?>


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="../farmer.jpg" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
    <?php
$uid=$_SESSION['adminid'];
$ret=mysqli_query($con,"select name from admin where id='$uid'");
$row=mysqli_fetch_array($ret);
$username=$row['name'];

?>
                <div class="profile-usertitle-name"><?php echo $username; ?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="dashboardADMIN.php"><em class="fa fa-dashboard">&nbsp;</em> Produts</a></li>
                     
           <li class=""><a href="adverts.php"><em class="fa fa-calendar">&nbsp;</em>Adverts</a></li>

           <li class=""><a href="#"><em class="fa fa-calendar">&nbsp;</em>View </a></li>
           
 



            
            <li><a href="user-profile.php"><em class="fa fa-user">&nbsp;</em>My Profile</a></li>
            <li><a href="../logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

        </ul>
    </div>