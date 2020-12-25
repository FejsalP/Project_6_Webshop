<?php 
function emptyInputSignup($name, $email, $username, $password, $password_repeat){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($password) || empty($password_repeat)){
        $result = true;
    }
    else {
        $result =false;
    }

    return $result;
}
function invalidUsername($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result=false;
    }
    return $result;
}
function passwordMatch($password, $password_repeat){
    $result;
    if ($password !== $password_repeat){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function usernameOrEmailExists ($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE userUsername = ? OR userEmail = ?;";
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)){
        header("location: ../signup.php?error=statementfailed");
        exit();
    }
    mysqli_stmt_bind_param($statement, "ss", $username, $email);
    mysqli_stmt_execute($statement);

    $resultData = mysqli_stmt_get_result($statement);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result=false;    
        return $result;
    }

    mysqli_stmt_close($statement);
}
function createUser ($conn, $name, $email, $username, $password){
    $sql = "INSERT INTO users (userName, userEmail, userUsername, userPassword) VALUES (?, ?, ?, ?);";
    echo $sql;
    $statement = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($statement, $sql)){
        header("location: ../signup.php?error=statementfailed");
        exit();
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($statement, "ssss", $name, $email, $username, $hashedPassword);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);
    header("location: ../signup.php?error=none");
    exit();
}


function emptyInputLogin($username, $password){
    $result;
    if(empty($username) || empty($password)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function loginUser ($conn, $username, $password){
    $usernameExists = usernameOrEmailExists($conn, $username, $username);
    
    if ($usernameExists === false){
        header ("location: ..login.php?error=wronglogin");
        exit();
    }

    $passwordHashed = $usernameExists["userPassword"];
    $checkPassword = password_verify($password, $passwordHashed);
    if ($checkPassword === false){
        header("location: ../login.php?error=wronglogininfo");
        exit();
    }
    else if ($checkPassword === true){
        session_start();
        $_SESSION["userID"] = $usernameExists["usersID"];
        $_SESSION["userUsername"] = $usernameExists["userUsername"];
        header("location: ../index.php");
        exit();
    }
}