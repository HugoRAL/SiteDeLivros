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
    <?php  include_once("header.php");?>
    
    <div style="padding-left: 20%; padding-right: 20%; padding-top: 5%;">
    <selection >
    <form action="php/Register.php" method="post" >
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="Name" class="form-control" >
         </div>
         <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="text" name="Email" class="form-control" >
         </div>
         <div class="mb-3">
          <label class="form-label">PassWord</label>
          <input type="password" name="Pwd" class="form-control" >
          <div  class="form-text">We'll never share your PassWord with anyone else.</div>
         </div>
         <div class="mb-3">
          <label  class="form-label">Comfirm PassWord</label>
          <input type="password" name="CPwd" class="form-control" >
         </div>
        <button type="submit" name="Register" class="btn btn-primary">Registro</button>
    </form>
    <?php
    if(isset($_GET["error"])){
      if ($_GET["error"] == "emptyinput"){
        echo "<p class='text-danger'> Fill in all fields!</p>";
      }
      else if ($_GET["error"] == "invaliduid"){
        echo "<p class='text-danger'> Choose a proper username!</p>";
      }
      else if ($_GET["error"] == "invalidemail"){
        echo "<p class='text-danger'> Choose a proper email!</p>";
      }
      else if ($_GET["error"] == "passwordsdontmatch"){
        echo "<p class='text-danger'> Passwords Dont Match!</p>";
      }
      else if ($_GET["error"] == "usernametaken"){
        echo "<p class='text-danger'> Username already taken!</p>";
      }
      
      else if ($_GET["error"] == "none"){
        echo "<p class='text-success'> You have Signed UP!</p>";
      }
    }
    ?>
  </selection>
</div>
            
</body>
</html>