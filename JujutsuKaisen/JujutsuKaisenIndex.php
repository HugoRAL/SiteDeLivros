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
      <h1 style="text-align: center;">Jujutsu Kaisen</h1>
      <div style="display: flex;margin: 5%;">
        <img src="../Assets/Img/Jujutsu Kaisen.jpg" style="max-width: 20%;">
        <p style="margin-top:5%; margin-left:5%;" >King Grey has unrivaled strength, wealth, and prestige in a world governed by martial ability. However, solitude lingers closely behind those with great power. Beneath the glamorous exterior of a powerful king lurks the shell of man, devoid of purpose and will.<br>Reincarnated into a new world filled with magic and monsters, the king has a second chance to relive his life. Correcting the mistakes of his past will not be his only challenge, however. Underneath the peace and prosperity of the new world is an undercurrent threatening to destroy everything he has worked for, questioning his role and reason for being born again.</p>
      </div>
    </div>

  </div> 
  <div style="background-color: black;">
  <div class="btn-group-vertical;" style="margin: 5%;width: 90%;">
    <h2 style="margin-bottom: 5%;">Last Caps</h2>
    <?php 
    $name = "Jujutsu Kaisen";
    include("../php/serv.php");
    include_once("../php/func.php");
    Chapers($pdo,$name);
  ?>    
  <h2 style="margin-bottom: 5%;color: #000;">L</h2>
  </div>
  </div>


</body>
</html>