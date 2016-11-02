<?php
$referrer = $_SERVER['HTTP_REFERER'];
if (!preg_match("index.html",$referrer)) {
header('Location: http://www.smartbanking.in');
} ;
//create variables
$name = $_POST['name'];
$email = $_POST['email'];
//$sub = $_POST['subject'];
$sub = "Feedback from Smart Banking Website";
$msg = "Name : ".$_POST['name'] .'<br>';
$msg .= "Subject : ".$_POST['subject'].'<br>';
$msg .= "Review : " .$_POST['message'].'<br>';
//creat email
$to = "vyan.publications@gmail.com";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$headers .= 'From: ' . $email . "\r\n";
mail($to,$sub,$msg,$headers);
header("location:success.html");
?>