<?php 
    session_start();
        include_once '../include/dbconnection.php';
    if(isset($_POST['submit'])){
        $Author = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['Author'])));
        $File = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['File'])));
        $Rating = htmlentities(stripslashes(mysqli_real_escape_string($con,$_POST['Rating'])));
        
        
        $id = $_REQUEST['id'];
        
        $insertqry = mysqli_query($con,"Update documents set Author = '$Author',File = '$File' where id = $id") or die(mysqli_error($con));
        if($insertqry)
        {
            $_SESSION['email'] = $email;
            $_SESSION['lecno'] = $lecno;
            header('location:Success.php');
        }
    }
?>
