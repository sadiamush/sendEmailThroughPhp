<?php
$to = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$headers="From: sadiamushtaq1049@gmail.com";
if(mail($to,$subject,$message,$headers))
{
  echo "Email successfully sent to $to";
}else{
    echo "Email sending failed";
}







?>