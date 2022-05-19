<?php
    include_once '../includes/dbconnection.php';
    $id = $_REQUEST['data'];
    $qry = mysqli_query($con,"Select * from documents where id='$id'") or die(mysqli_error($con));
    while($row = mysqli_fetch_array($qry)){
        $id = $row['id'];
        $Author=$row['Author'];
        $File =$row['File'];
        $Rating = $row['Rating'];
        
        
    }
?>
<script type="text/javascript" src="Registration.js"></script>
<script type="text/javascript">

</script>
<h2 style="text-align: center;">User Registration form </h2>
<form name="Myform" id="Myform" action="EditProcess.php?id='<?php echo $id;?>'" method="post" onsubmit="return(Validate());">
   <div id="error" style="color:red; font-size:16px; font-weight:bold; padding:5px"></div>
    <table style="width:100px; margin-left: 14em;">
        <thead></thead>
        <tbody>
            <tr>
                <td>Author</td>
                <td><input type="text" name="Author" id="Author" onkeydown="HideError()" value="<?php  echo $row['Author'];?>"/></td>
            </tr>
            
            <tr>
                <td>File</td>
                <td><input type="text" name="File" id="File" onkeydown="HideError()" value="<?php  echo $row['File'];?>"/></td>
            </tr>
            <tr>
                <td>Rating</td>
                <td><input type="text" name="Rating" id="Rating" onkeydown="HideError()" value="<?php  echo $row['Rating'];?>" "/></td>
            </tr>
            
            <tr>
                <td style="color:#F8F8FF;">dddddddddddddddd</td>
                <td><input type="submit" name="submit" value="Update" /></td>
            </tr>
        
        </tbody>
    </table>
</form>

