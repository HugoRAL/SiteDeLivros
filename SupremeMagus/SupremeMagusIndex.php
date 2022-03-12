<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css"/>
    <title>Document</title>
</head>
<body class="p-3 mb-2 bg-dark text-white">  
    <script src="../js/jquery-3.6.0.js"></script>
    <script src="../js/bootstrap.js"></script>
  
  <?php include_once("../php/header2.php");?>

  <div>
    <div>
      <h1 style="text-align: center;">Supreme Magus</h1>
      <div style="display: flex;margin: 5%;">
        <img src="../Assets/Img/Supreme Magus.jpg" style="max-width: 20%;">
        <p style="margin-top:5%; margin-left:5%;" >Derek McCoy was a man who spent his entire life facing adversity and injustice. After being forced to settle with surviving rather than living, he had finally found his place in the world, until everything was taken from him one last time. After losing his life to avenge his murdered brother, he reincarnates until he finds a world worth living in, a world filled with magic and monsters. Follow him along his journey, from grieving brother to alien soldier. From infant to Supreme Magus.</p>
      </div>
    </div>

  </div> 
  <div style="background-color: black;">
  <div class="btn-group-vertical;" style="margin: 5%;width: 90%;">
    <h2 style="margin-bottom: 5%;">Last Caps</h2>
    <?php 
    $name = "Supreme Magus";
    include("../php/serv.php");
    include_once("../php/func.php");
    Chapers($pdo,$name);
  ?>    
  <h2 style="margin-bottom: 5%;color: #000;">L</h2>
  </div>
  </div>


</body>
</html>