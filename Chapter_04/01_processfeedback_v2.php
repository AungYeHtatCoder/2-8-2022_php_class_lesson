<?php

// create short variable names
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);

// set up static information
$toaddress = "feedback@example.com";

$subject = "Testimonial from website";

$mailcontent = "Client name: ".str_replace("\r\n", "", $name)."\n".
               "Client email address: ".str_replace("\r\n", "",$email)."\n".
               "Client comments:\n".str_replace("\r\n", "",$feedback)."\n";

$fromaddress = "From: webserver@example.com";

// call the mail() function to send email
mail($toaddress, $subject, $mailcontent, $fromaddress);

?>
<!DOCTYPE html>
<html>

<head>
 <title>Auto parts from Vovka - Feedback sent</title>
</head>

<body>

 <h1>Review sent</h1>
 <p>Your review (shown below) has been submitted.</p>
 <p><?php echo nl2br(htmlspecialchars($feedback)); ?> </p>
</body>

</html>