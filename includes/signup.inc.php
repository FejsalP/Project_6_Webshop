<?php

if (isset($_POST["submit"])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_repeat = $_POST['passwordRepeat'];

    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $password, $password_repeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUsername($username) !== false){
        header("location: ../signup.php?error=invalidUsername");
        exit();
    }

    if (invalidEmail($email) !== false){
        header("location: ../signup.php?error=invalidEmail");
        exit();
    }

    if (passwordMatch($password, $password_repeat) !== false){
        header("location: ../signup.php?error=pass_not_same");
        exit();
    }

    if(usernameOrEmailExists($db->conn, $username, $email) !==false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    
    createUser($db->conn, $name, $email, $username, $password);


}
    

else{
    echo 'Failed...';
    header("location: ../signup.php");
    exit();
}
?>