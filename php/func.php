<?php

function emptyInputSingnup($name, $email, $pass, $cpass) {
    $result;
    if (empty($name) || empty($email) || empty($pass) || empty($cpass)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($name) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function pwdMatch($pass, $cpass) {
    $result;
    if ($pass !== $cpass) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function uidExists($pdo, $name, $email) {
    $sql = "SELECT * FROM users WHERE Username = ? OR Email = ?;";
    $stmt = mysqli_stmt_init($pdo);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registro.html?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createUser($pdo, $name, $email, $pass) {
    $sql =" INSERT INTO users (Username, Email, Pass) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($pdo);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registro.php?error=stmtfailed");
        exit();
    }
    $hashedPass = password_hash($pass, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPass);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../registro.php?error=none");
        exit();
}

//--------------------------------------- LOGIN -----------------------------------------
function emptyInputLogin($name, $pass) {
    $result;
    if (empty($name) || empty($pass)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function userlogin($pdo, $name, $pass) {
    $UserExist = uidExists($pdo, $name, $name);

    if ($UserExist === false ) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $passHashed = $UserExist["Pass"];
    $checkPass = password_verify($pass, $passHashed);

    if ($checkPass === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    } else if($checkPass === true){
        session_start();
        $_SESSION["username"] = $UserExist["Username"];
        $_SESSION["ID"] = $UserExist["ID"];
        header("location: ../index.php");
        exit();
    }
}
//------------------------ index-----------------

function LastReleases($pdo) {
    $sql = "SELECT book.Nome ,MAX(bookinfo.Cap_Number) FROM book,bookinfo WHERE bookinfo.ID_Book=book.ID GROUP BY book.Nome ORDER BY bookinfo.Cap_date LIMIT 6;";
    //$sql = "SELECT * FROM book ORDER by book.DataLastCap DESC LIMIT 8;";
    $stmt = mysqli_stmt_init($pdo);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Error.php");
        exit();
    }
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    while($row = mysqli_fetch_array($resultData)){
        $Caminho = "Assets/Img/" . $row['Nome'] . ".jpg";
        $Nome = $row['Nome'];
        $Link = str_replace(' ', '', $Nome)."/".str_replace(' ', '', $Nome)."Index.php";
        $Cap = $row['MAX(bookinfo.Cap_Number)'];
        echo "
        <a href=".$Link." style='text-dec'>
        <div style='max-width: 300px; height: auto;margin: 2%;display: inline-block;'>
        <p style='text-decoration:none;text-align: center;' class='text-white bg-dark' > <img src='".$Caminho."' alt='img' class='rounded' style='position: relative;'>".$Nome." --- Cap.".$Cap." </p>
        </div>
        </a>
        ";

    }
    mysqli_stmt_close($stmt);

}

function Comic($pdo) {
    $sql = "SELECT book.Nome  FROM book,bookinfo WHERE bookinfo.ID_Book=book.ID && book.Type= 'Comic' GROUP BY book.Nome ORDER BY book.Nome ;";
    //$sql = "SELECT * FROM book ORDER by book.DataLastCap DESC LIMIT 8;";
    $stmt = mysqli_stmt_init($pdo);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Error.php");
        exit();
    }
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    while($row = mysqli_fetch_array($resultData)){
        $Caminho = "Assets/Img/" . $row['Nome'] . ".jpg";
        $Nome = $row['Nome'];
        $Link = str_replace(' ', '', $Nome)."/".str_replace(' ', '', $Nome)."Index.php";

        echo "
        <a href=".$Link." style='text-dec'>
        <div style='max-width: 300px; height: auto;margin: 2%;display: inline-block;'>
        <p style='text-decoration:none;text-align: center;' class='text-white bg-dark' > <img src='".$Caminho."' alt='img' class='rounded' style='position: relative;'>".$Nome." </p>
        </div>
        </a>
        ";

    }
    mysqli_stmt_close($stmt);

}

function Novel($pdo) {
    $sql = "SELECT book.Nome  FROM book,bookinfo WHERE bookinfo.ID_Book=book.ID && book.Type= 'Novel' GROUP BY book.Nome ORDER BY book.Nome ;";
    //$sql = "SELECT * FROM book ORDER by book.DataLastCap DESC LIMIT 8;";
    $stmt = mysqli_stmt_init($pdo);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Error.php");
        exit();
    }
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    while($row = mysqli_fetch_array($resultData)){
        $Caminho = "Assets/Img/" . $row['Nome'] . ".jpg";
        $Nome = $row['Nome'];
        $Link = str_replace(' ', '', $Nome)."/".str_replace(' ', '', $Nome)."Index.php";

        echo "
        <a href=".$Link." style='text-dec'>
        <div style='max-width: 300px; height: auto;margin: 2%;display: inline-block;'>
        <p style='text-decoration:none;text-align: center;' class='text-white bg-dark' > <img src='".$Caminho."' alt='img' class='rounded' style='position: relative;'>".$Nome." </p>
        </div>
        </a>
        ";

    }
    mysqli_stmt_close($stmt);

}


function Chapers($pdo,$name) {
    $sql = "SELECT bookinfo.Cap_Name, bookinfo.Cap_Number, bookinfo.Cap_date FROM bookinfo, book WHERE ? = book.Nome && bookinfo.ID_Book = book.ID ORDER BY bookinfo.Cap_date ASC;";
    //$sql = "SELECT * FROM book ORDER by book.DataLastCap DESC LIMIT 8;";
    $stmt = mysqli_stmt_init($pdo);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Error.php");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $name);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    while($row = mysqli_fetch_array($resultData)){
        $Number = $row['Cap_Number'];
        $Link = "Chap_" . $Number . ".php";
        $Nome = $row['Cap_Name'];
        $Date = $row['Cap_date'];
        echo "
        <a href='".$Link."' style='text-decoration:none;display: flex;background-color: black;color:white;' ><p style='text-align: left;margin-left:0px;background-color: black;width: 30%'>".$Nome." --- ".$Number."</p><div style='width: 40%;'></div><p style='text-align: left;margin-rigth: 10%'>".$Date."</p></a>

        ";

    }
    mysqli_stmt_close($stmt);

}

function AddHistoric($pdo,$BookID,$Number, $Chap){
    $sql = "SELECT * FROM library WHERE library.ID_Books = ? && library.ID_User = ? ;";
    $stmt = mysqli_stmt_init($pdo);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Error.php");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ii", $BookID, $Number);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        mysqli_stmt_close($stmt);
        $sql = "UPDATE library SET library.NumberCap = ? , library.Date = ? WHERE library.ID_Books = ? && library.ID_User = ? ;";
        $stmt = mysqli_stmt_init($pdo);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../Error.php");
            exit();
        }
        $data=date("Y-m-d h:i:sa");
        mysqli_stmt_bind_param($stmt, "isii",$Chap, $data, $BookID, $Number);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }else{
        mysqli_stmt_close($stmt);
        $sql = "INSERT INTO library (library.ID_Books, library.ID_User, library.NumberCap, library.Date) VALUES (?,?,?,?);";
        $stmt = mysqli_stmt_init($pdo);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../registro.php?error=stmtfailed");
            exit();
        }
        $data=date("Y-m-d h:i:sa");
        mysqli_stmt_bind_param($stmt, "iiis", $BookID,$Number,$Chap,$data);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
}

function GetHistoric($pdo,$ID) {
    $sql = "SELECT book.Nome, library.NumberCap FROM book, library WHERE library.ID_User = ? && book.ID = library.ID_Books GROUP BY book.Nome ORDER BY library.Date DESC LIMIT 4;";
    $stmt = mysqli_stmt_init($pdo);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Error.php");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "i", $ID);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    while($row = mysqli_fetch_array($resultData)){
        $Caminho = "Assets/Img/" . $row['Nome'] . ".jpg";
        $Nome = $row['Nome'];
        $Cap = $row['NumberCap'];
        $Link = str_replace(' ', '', $Nome)."/Chap_".$Cap.".php";
        
        echo "
        <a href=".$Link." style='text-dec'>
        <div style='max-width: 300px; height: auto;margin: 2%;display: inline-block;'>
        <p style='text-decoration:none;text-align: center;' class='text-white bg-dark' > <img src='".$Caminho."' alt='img' class='rounded' style='position: relative;'>".$Nome." --- Chap" .$Cap. " </p>
        </div>
        </a>
        ";

    }
    mysqli_stmt_close($stmt);

}

?>