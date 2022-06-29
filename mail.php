<?php
// get data from form 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'ghorai.soumyadip33@gmail.com';
$subject = $_POST['subject'];
$txt = "Name = ". $name . "\r\n Email = " . $email . "\r\n Message = ". $message; 
// \r\n line break 


$headers = 'Form: noreply@mysite.com' . "\r\n" . "CC: somebodyelse@example.com"; 

if ($email != NULL){
    mail($to, $subject, $txt, $headers); 
}

// redirect 
header("Location: index.html")