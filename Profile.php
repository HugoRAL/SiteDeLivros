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

<body class="p-3 mb-2 bg-dark text-white" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('Assets/Img/Background.jpg');">
<script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.js"></script>
  <?php 
    include_once("header.php");
    include("php/serv.php");
    include_once("php/func.php");
           if (isset($_SESSION["ID"])){
            $Name = $_SESSION["username"];
            echo "<h1 style='text-align: center;margin-top:5%'>Hello ".$Name.", this is your personal corner! Your history, and information will be here! </h1> ";
           }else{
            header("location: ../login.php?error=wronglogin");
            exit();
           }
    
  ?>
  
  <div style='margin-top:10%;margin-left:5%'>
      <h3 style='text-align: left;'>Historic</h3>
      <div style='margin-top:1%;'>
      <?php
        $ID = $_SESSION["ID"];
        GetHistoric($pdo,$ID)
      ?>
        
      </div>
  </div>






</body>
</html>