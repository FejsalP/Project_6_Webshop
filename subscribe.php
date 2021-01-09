<?php
    include_once 'includes/functions.inc.php';
    $email=$_POST['email'];
    addSub($email, $db->conn);
    //header("location: index.php?".$email);
    //exit();
?>