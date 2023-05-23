<?php
 $to = "eva.lypak@gmail.com";
 $Subject = "Email from my website";

 $userName = $_POST["user-name"];
 $userEmail = $_POST["user-email"]; 
 $userMessage = $_POST["user-message"]; 

 $headers .= "Content-type: text/html;\r\n";
 $headers .= "From: $userEmail";

 mail($to, $Subject, $userMessage, $headers);
 echo "Email has been sent! Thank you $userName";
?>

<h3><?php echo $userName; ?></h3>
<h3><?php echo $userEmail; ?></h3>
<h3><?php echo $userMessage; ?></h3>

