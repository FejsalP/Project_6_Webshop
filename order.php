<?php
    require 'PHPMailer-master/PHPMailerAutoload.php';
    include_once 'shopping_cart.php';

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
    $mail->Subject = "Purchase";
    $id = $_SESSION['userID'];
    if(!isset($id)){
        header("location: products.php");
        exit();
    }    
    if (empty($message)){
        header("location: index.php?".$id."aaa");
        exit();
    }
   
    
    $mail->Body = "User with ID: ".$id." ordered following items: <br><br>".$message;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    header('Location: index.php?error');
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
header("Location: index.php");
?>