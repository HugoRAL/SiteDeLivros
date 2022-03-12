<?php
    if (isset($_POST["Register"])){

        $name = $_POST["Name"];
        $email = $_POST["Email"];
        $pass = $_POST["Pwd"];
        $cpass = $_POST["CPwd"];

        include("serv.php");
        require_once "func.php";


        if (emptyInputSingnup($name, $email, $pass, $cpass) !== false) {
            header("location: ../registro.php?error=emptyinput");
            exit();
        }

        if (invalidUid($name) !== false) {
            header("location: ../registro.php?error=invaliduid");
            exit();
        }

        if (invalidEmail($email) !== false) {
            header("location: ../registro.php?error=invalidemail");
            exit();
        }

        if (pwdMatch($pass, $cpass) !== false) {
            header("location: ../registro.php?error=passwordsdontmatch");
            exit();
        }

        if (uidExists($pdo, $name, $email) !== false) {
            header("location: ../registro.php?error=usernametaken");
            exit();
        }

        createUser($pdo, $name, $email, $pass);

    }else{
        header("location: ../registro.php");
        exit();
    }

?>