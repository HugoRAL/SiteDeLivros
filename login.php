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
  <?php  include_once("header.php");?>
    <div style="padding-left: 20%; padding-right: 20%; padding-top: 5%;">
    <selection >
    <form action="php/Login.php" method="post" >
        <div class="mb-3">
          <label class="form-label">Username/Email</label>
          <input type="text" name="Name" class="form-control" >
         </div>
         <div class="mb-3">
          <label class="form-label">PassWord</label>
          <input type="password" name="Pwd" class="form-control" >
          <div  class="form-text">We'll never share your PassWord with anyone else.</div>
         </div>
        <button type="submit" name="Login" class="btn btn-primary">Login</button>
    </form>
    <a href="registro.php" class="btn btn-secondary btn-lg active" style="margin-top: 1%;" >Nâo tem uma conta?</a>
    <?php
    if(isset($_GET["error"])){
      if ($_GET["error"] == "emptyinput"){
        echo "<p class='text-danger'> Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "wronglogin"){
        echo "<p class='text-danger'> Incorrect login information!</p>";
      }
    }
    ?>
  </selection>
</div>
</body>
</html>