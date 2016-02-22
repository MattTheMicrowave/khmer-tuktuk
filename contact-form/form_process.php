<?php
$first_name = $_POST('firstname');
$last_name = $_POST('lastname');
$email = $_POST('email');
$message = $_POST('msg');

$to = 'mwlluis@hotmail.com';
$subject = 'New Message';

mail ($to, $message, $msg, "From: " . $first_name . $last_name);
echo "Your Message Has Been Sent";
?>