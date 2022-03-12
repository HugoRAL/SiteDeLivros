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
    <h2 style="text-align: center;">Jujutsu Kaisen</h2>
    <h1 style="text-align: center;">.Chaper 1</h1>
    <div style="margin: 5%">
        <img src="Chap1_IMG/1.jpg" style="display: block;margin-left: auto;margin-right: auto;">
        <?php
        
        if (isset($_SESSION["ID"])){
            echo"<img src='Chap1_IMG/2.jpg' style='display: block;margin-left: auto;margin-right: auto;'>
            ";
            include("../php/serv.php");
            include_once("../php/func.php");
            $Number = $_SESSION["ID"];
            $Chap = 2;
            $BookID = 6 ;
            AddHistoric($pdo,$BookID,$Number, $Chap);
        }else{
            echo "<a href='../login.php' style='text-decoration:none;text-align: center;' ><h1 style='color: #ff4136'> To continue reading you must Login </h1></a>";
        }

    ?>
    
    
    </div>

</body>
</html>