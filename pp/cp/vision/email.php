<?php

$EmailFrom = "endocuff.com";
$EmailTo = "admin@antidotemarketing.com";

$Email = Trim(stripslashes($_POST['Email'])); 
 
$subject = "Endocuff Email Address from MedEye Content";


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Email: ";
$Body .= $Email;
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