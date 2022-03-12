<?php
    if (isset($_POST["Login"])){

        $name = $_POST["Name"];
        $pass = $_POST["Pwd"];

        include("serv.php");
        require_once "func.php";


        if (emptyInputLogin($name, $pass) !== false) {
            header("location: ../login.php?error=emptyinput");
            exit();
        }

        userlogin($pdo, $name, $pass);


    }else{
        header("location: ../login.php");
        exit();
    }

?>