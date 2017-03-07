<?php

// Create message
$Message = "";
if (strlen($_POST['name']) !== 0){
	$Message .= "\n\rName: ".$_POST['name']."   \n\r";
}	
if (strlen($_POST['email']) !== 0){
	$Message .= "\n\rEmail: ".$_POST['email']."   \n\r";
}		
if (strlen($_POST['phone']) !== 0){
	$Message .= "\n\rPhone number: ".$_POST['phone']."   \n\r";	
}
if (strlen($_POST['query']) !== 0){
	$Message .= "\n\rQuery:\n\n\r ".$_POST['query']."   \n\r";	
}

// Send email	
$To = 'ashley181291@gmail.com';
$Subject = 'sammiesark.co.uk: website query';
$Headers = "From: sammiesark.co.uk \r\n";
mail($To, $Subject, $Message, $Headers);

header('Location: contact_sent.html');
?>

