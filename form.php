<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'varunvnair10@gmail.com';
    $email_subject = "New Form Submission on your portfolio";
    $email_body = "User Name : $name .\n"
                "User Email: $email .\n"
                "User subject: $subject .\n"
                "User Message: $message .\n";
    
    $to = "varunvnairofficial@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>
