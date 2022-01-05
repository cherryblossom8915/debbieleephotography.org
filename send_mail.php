<?php
$webmaster_email = "chloejcook28@gmail.com, ucilikefrogs1@gmail.com";

$contact_page = "contact.html";

$name = $_REQUEST['name'] ;
$email = $_REQUEST['email'] ;
$phone = $_REQUEST['phone'] ;
$type = $_REQUEST['type'] ;
$quantity = $_REQUEST['quantity'] ;
$theme = $_REQUEST['theme'] ;
$when = $_REQUEST['when'] ;
$spam = $_REQUEST['spam'] ;
$msg =
"Name: " . $name . "\r\n" . 
"Email: " . $email . "\r\n" . 
"Phone: " . $phone . "\r\n" . 
"Type: " . $type . "\r\n" . 
"Quantity: " . $quantity . "\r\n" . 
"Theme: " . $theme . "\r\n" . 
"When: " . $when ;

function isInjected($str) {
	$injections = array('(\n+)',
	'(\r+)',
	'(\t+)',
	'(%0A+)',
	'(%0D+)',
	'(%08+)',
	'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str)) {
		return true;
	}
	else {
		return false;
	}
}

if (!isset($_REQUEST['email'])) {
header( "Location: $contact_page" );
}

else if ($_REQUEST['spam'] != "") {
    
    header( "Location: $contact_page" );
}

else {

	mail( "$webmaster_email", "Debbie Lee Photography - " . $name, $msg );

	header( "Location: $contact_page" );
}
?>