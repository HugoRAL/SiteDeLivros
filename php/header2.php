<?php session_start();?>

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
<script src="js/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.js"></script>
<body class="p-3 mb-2 bg-dark text-white">
<div> 
<ul  style="background-color: black;  list-style-type: none; display: flex;">
  <li  style="margin-left:5%;margin-top: auto;margin-bottom: auto;" >
    <a class="nav-link" href="../index.php" ><img src="../Assets/Img/logo.png" alt="Logo" style="width: 50px; height: 50px; object-fit: contain; " ></a>
  </li>
    <li  style =" text-align: center;padding: 14px 16px;margin-top: auto;margin-bottom: auto;margin-left:auto; " >
      <a class="nav-link" href="../Comic.php" style="color:white;">Comic</a>
    </li>
    <li style =" text-align: center;padding: 14px 16px;margin-top: auto;margin-bottom: auto;">
      <a class="nav-link" href="../Novels.php" style="color:white;">Novels</a>
    </li>

    <?php
        if (isset($_SESSION["ID"])){
            echo "<li style =' text-align: center;padding: 14px 16px;margin-top: auto;margin-bottom: auto;'><a class='nav-link' href='../Profile.php'style='color:white;' ><img src='../Assets/Img/User.png' alt='Profile' style='width: 50px; height: 50px; object-fit: contain; ' ></a></li>";
            echo "<li style =' text-align: center;padding: 14px 16px;margin-top: auto;margin-bottom: auto;'><a class='nav-link' href='../php/Logout.php' style='color:white;'>Logout</a></li>";
        }else{
            echo "<li style =' text-align: center;padding: 14px 16px;margin-top: auto;margin-bottom: auto;'><a class='nav-link' href='../login.php'style='color:white;' >Login</a></li>";
        }
    ?>
  </ul>
<div> 
</body>
</html>