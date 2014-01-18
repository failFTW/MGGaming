<?php
$IP = $_SERVER['REMOTE_ADDR'];
$errors = '';
$myemail = 'will@failftw.info';
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['frank']) || 
   empty($_POST['trank']) || 
   empty($_POST['message']) || 
   empty($_POST['age']) || 
   empty($_POST['exp']) || 
   empty($_POST['fname']))
{
    $errors .= "\n Error: all fields are required";
}

$fname = $_POST['fname']; 
$name = $_POST['name']; 
$frank = $_POST['frank']; 
$trank = $_POST['trank']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 
$age = $_POST['age'];  
$exp = $_POST['exp']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "New Staff Application From $fname";
	$email_body = "You have received a new staff application. ".
	"\nFirst Name: $fname \nIGN: $name \n Email: $email_address \n Age: $age \n IP: $IP \n Current Rank: $frank Applying For: $trank \n\n Experiences: $exp \n\n Reason: \n $message"; 
	
	$headers = "From: $email_address\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	header('Location: http://failftw.info/staff-app/thank-you/');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body bgcolor="#93FA4F" text="#007C06" link="black" vlink="#546E5F">
    <center>
	<b>NOTICE:</b> <i>Your IP (<?php echo $IP; ?>) has been logged!</i>
	<b>
	<?php
	echo nl2br($errors);
	?>
    </b></center>


</body>
</html>