<?php
$referrer = $_SERVER['HTTP_REFERER'];
if (!preg_match("index.html",$referrer)) {
header('Location: http://www.smartbanking.in');
} ;
$to = "vyan.publications@gmail.com";
$subject = "From Website Order Form";
$name = $_POST['name'] ;
$phone = $_POST['phone'] ;
$add1 = $_POST['address1'] ;
$add2 = $_POST['address2'] ;
$add3 = $_POST['address3'] ;
$order = $_POST['order'];
$amt = $_POST['amount'];
$trai = $_POST['transaction'];
$message_body = "Name: ".$_POST["name"] .'<br>'; 
$message_body .= "Phone No: ".$_POST["phone"].'<br>'; 
$message_body .= "Address Line1: ".$_POST["address1"].'<br>';
$message_body .= "Address Line2: ".$_POST["address2"].'<br>';
$message_body .= "Address Line3: ".$_POST["address3"].'<br>';
$message_body .= "No: Of Books Ordered: ".$_POST["order"].'<br>';
$message_body .= "Amount Transferred: ".$_POST["amount"].'<br>';  
$message_body .= "Transaction Id: ".$_POST["transaction"].'<br>'; 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$from = $_POST['email'] ;
$headers .= 'From: ' . $from . "\r\n";
mail($to,$subject,$message_body,$headers);
header("location:success.html");
?>