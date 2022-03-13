<?php

// Type sender address below as your wish

$EmailTo = "admin@antidotemarketing.com ";

$email = Trim(stripslashes($_POST['email'])); 


// Type subject as your wish

$subject = "Free Video Reveals";


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";





// send email 
$success = mail($EmailTo, $subject, $Body);

// redirect to success page 
if ($success){
 
  print "<meta http-equiv=\"refresh\" content=\"0;URL=confirm.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>