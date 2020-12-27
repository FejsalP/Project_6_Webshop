<?php


if (isset ($_POST["submit"])){
    $username = $_POST["name"];
    $password = $_POST["password"];
    

    require_once 'functions.inc.php';
    
    if (emptyInputLogin($username, $password) !== false){
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($db->conn, $username, $password);
}

else {
    header ("location: ../login.php");
    exit();
}