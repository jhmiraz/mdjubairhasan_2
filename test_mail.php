<?php
$to = "miraz44jubair@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$headers = "From: miraz15-14631@diu.edu.bd";

if (mail($to, $subject, $message, $headers)) {
    echo "Mail Sent Successfully";
} else {
    echo "Mail Sending Failed";
}
?>
