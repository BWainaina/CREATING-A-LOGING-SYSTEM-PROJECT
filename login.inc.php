<?php

if(isset($_POST["submit"])) {

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
        if (InvalidUid($username) !== false){
            header("location: ../login.php?error=invaliduid");
            exit();
        }
        if (invalidEmail($email) !== false){
            header("location: ../login.php?error=invalidemail");
            exit();
        }
        if($checkPwd === false) {
            header("location: ../login.php?error=wronglogin");
            exit();
        }

    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../login.php");
    exit();
}
}