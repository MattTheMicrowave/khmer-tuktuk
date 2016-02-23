<?php
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = 'mwlluis@hotmail.com';
$subject = 'New Message' . ' - ' . $first_name . ' ' . $last_name;

//$separation = ' '; 

//i wanted to use this to separate the first and last names in header but it kills the script


//this headers variable kills the script, but i don't know why
//
//$headers = `"From: " . $first_name. " " . $last_name . " " . $email`;





//wrtiting the script with the headers in the mail function fixed the script;

// this from header only works with first and last name, why???
mail ($to, $subject, $message, "From: " . $email);

echo "Your Message Has Been Sent";
?>