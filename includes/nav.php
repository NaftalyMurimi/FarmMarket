<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style type="text/css">
    	*{
    		margin: 0px;
    		padding: 0px;
    	}
    body{
          background: white;
        }
    .hold{
		display:flex;
	 	justify-content: center; 
	 	width:100%; 
	  	max-width:1095px; 
		margin: 0 auto; 
		
	}
   .hold ul{
    list-style: none;
	}
	.hold ul li{
		background-color: greenyellow;
		width: 250px;
		height: 50px;
		
		line-height: 50px;
		float: left;
		font-size: 18px;
		text-align: center;
		color: darkgrey;
	}
	.hold ul li:hover{
		background-color: green;
		border-radius: 30px;

	}
	 a{
		text-decoration: none;
	}
	
	
</style>
</head>
<body>
<div class="hold">
	
		<ul>
			<li> <a href="index.php">Home</a></li>
			
			<li> <a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Users</a>
			<!-- <button type="button" class="btn btn-primary" >
                Users</button> -->
			</li>
		</ul>
	

</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Users</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<button type="button" class="btn btn-info"><a href="buyer/login.php">Buyer</a></button> &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      	<button type="button" class="btn btn-info"><a href="seller/login.php">Seller</a></button>
      	&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      	<button type="button" class="btn btn-warning"><a href="admin/login.php">Admin</a></button>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>