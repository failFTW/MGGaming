<?php 
$errors = '';
$myemail = 'owner@mggaming.net';
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "New Mod Request From $name";
	$email_body = "You have received a new mod request. ".
	" \nIGN: $name \n Email: $email_address \n Reason: \n $message"; 
	
	$headers = "From: $email_address\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	header('Location: http://mggaming.net/mc-survival/mod-app/thank-you/');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body bgcolor="#93FA4F" text="#007C06" link="black" vlink="#546E5F">
    <center><b>
	<?php
	echo nl2br($errors);
	?>
    </b></center>


</body>
</html>