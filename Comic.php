<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/MyCss.css"/>
    <title>Document</title>
</head>
<body class="p-3 mb-2 bg-dark text-white">
<script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.js"></script>
    
  <?php include_once("header.php");?>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Assets/Carousel_IMG/4.png" class="d-block w-100" alt="..." style="max-width: 100%; height: 500px; object-fit: contain; ">
        </div>
        <div class="carousel-item">
          <img src="Assets/Carousel_IMG/2.png" class="d-block w-100" alt="..." style="max-width: 100%; height: 500px; object-fit: contain; ">
        </div>
        <div class="carousel-item">
          <img src="Assets/Carousel_IMG/3.png" class="d-block w-100" alt="..." style="max-width: 100%; height: 500px; object-fit: contain; ">
        </div>
      </div>
    </div>
  <div style="background-color: black;">
    <div style="margin: 10%;">
      <div><h1 class="text-center"  >Comics</h1></div>
      <div>
        <?php 
         include("php/serv.php");
         include_once("php/func.php");
         Comic($pdo);
        ?>
         
    </div>
    </div>
  </div>



</body>
</html>