<?php

$to_email = "ombhutkar9@gmail.com";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $name = $_POST["Name"];
  $email = $_POST["emailAddress"];
  $message = $_POST["message"];

  if (!empty($name) && !empty($email) && !empty($message)) {
    
    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: romanreignsamv@gmail.com";

  
    if (mail($to_email, $subject, $body, $headers)) {
      echo'mail sent successfully';
      exit();
    } else {
    
      echo 'mail not sent';
      exit();
    }
  } else {
  
    header("Location: contact-error.html"); 
    exit();
  }
}
