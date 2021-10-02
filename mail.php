<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

echo "Name: ".$name;
exit();

$to = "belovedrong@gmail.com";

$subject = "Mail From My Website";

$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@github.com" . "\r\n" .
"CC: lees145@unlv.nevada.edu";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
