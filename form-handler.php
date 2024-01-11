<?php
$name = $_post['name'];
$visiter_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_form = 'forstudy6856@gmail.com';   

$email_subject = 'New Form Submission'

$email_body = "User Name: $name. \n".
              "User Email: $visiter_email. \n".
                "Subject : $subject".
                "User Message: $message. \n";

$to = 'vyommodi18@gmail.com';

$headers = "Form: $email_form \r\n";

$headers = "Reply-To: $visiter_email \r\n";


mail($to,$email_subject,$email_body,$headers);

headers("Location: contact.html");
?>