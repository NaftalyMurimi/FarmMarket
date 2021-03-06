<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Farm</title>
    <link rel="css/layout.css" type="text/css" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        nav{
          background: #063146;
        }
    </style>
  
</head>
<body class="bg-light">
    <!-- Navigation bar -->
    <?php include_once('includes/nav.php');?>

    <!-- main image & intro text -->
  <section id="intro">
    <div class="container-lg">
      <div class="row g-4 justify-content-center align-items-center">
        <div class="col-md-5 text-center d-none d-md-block">
          <img src="farmer.jpg" class="img-fluid" alt="ebook">
        </div>
        <div class="col-md-5 text-center text-md-start">
          <h1>
            <div class="display-4">Digital Farm</div>
            <div class="display-6 text-muted">Farming made easier</div>
          </h1>
          <p class="lead my-4 text-muted">
            <b>SMART FARMING MISSION</b>
            <br>

          Marketing in potatoes business in a challenge we have to close the gap between the farmer and middlemen (brokers). Most of the times farmers have no choice on how to sell their produce they have no say the just go with what the brokers are offering. Farmer also need some updated market trends daily so that they can break the off from colonialism from the brokers. </p>
          
        </div>
        
      </div>
    </div>
  </section>
 <?php include_once('footer.php');?>
</body>
</html>