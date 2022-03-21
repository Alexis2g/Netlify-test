<?php

$headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";

   // $to = 'vuaille.alexis@gmail.com',
    //$subject = 'testing1',
    //$message = 'hello',
    
    
    
    // mail('vuaille.alexis@gmail.com', 'subject', 'testttt', 'From: vuaille.alexis@gmail.com');

    $result = mail('vuaille.alexis@gmail.com', 'subject', 'testttt', 'From: vuaille.alexis@gmail.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion());
    if( $result ) {
       echo 'Success';
    }else{
       echo 'Fail';
    }

 //   ini_set("SMTP","ssl://smtp.gmail.com");
 //   ini_set("smtp_port","465");
    ?>