<?php
    require 'PHPMailer-master/PHPMailerAutoload.php';

    $mail = new PHPMailer();

    try {
    //Server settings
    
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                       
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'fejsalpervatest@gmail.com';           
    $mail->Password   = 'manijaci123';                 
    $mail->Port       = 465;                                    
    $mail->SMTPSecure = 'ssl';

    
    $mail->setFrom('fejsalpervatest@gmail.com', 'Mailer');
    $mail->addAddress('fejsal.perva1705@gmail.com', 'Me');        

    
    $mail->isHTML(true);                                        
    $mail->Subject = $_POST['subject'];
    $name = $_POST['fname'];
    $surname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    if (empty($name) || empty($surname) || empty($email) || empty($message)){
        header("location: index.php?missingdata");
        exit();
    }
    if (!preg_match("/^[A-Za-z]*$/", $name)){
        header("location: index.php?invalidname");
        exit();
    }
    if (!preg_match("/^[A-Za-z]*$/", $surname)){
        header("location: index.php?invalidsurname");
        exit();
    }
    $mail->Body = $name." ".$surname.", asks: <br><br> ".$message. "<br><br>Here is my contact email: ".$email;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    header('Location: index.php?error');
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("Location: index.php");
?>