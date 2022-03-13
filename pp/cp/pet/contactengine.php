<?php

$EmailFrom = "arifahmed00000@gmail.com";
$EmailTo = "//COM.us12.list-manage.com/subscribe/post?u=6643619d93fa354ed9766a463&amp";
$Name = Trim(stripslashes($_POST['name']));

$Email = Trim(stripslashes($_POST['mail'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";


// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=landing.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>