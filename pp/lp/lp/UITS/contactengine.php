<?php

$EmailFrom = "arifahmed00000@gmail.com";
$EmailTo = "fazleerabbi0081@gmail.com";
$F_Name = Trim(stripslashes($_POST['First Name']));
$L_Name = Trim(stripslashes($_POST['Last Name']));


$Email = Trim(stripslashes($_POST['Email']));
$Country = Trim(stripslashes($_POST['Country of citizenship']));
$Study = Trim(stripslashes($_POST['Leave of study']));
$Enquiry = Trim(stripslashes($_POST['Enquiry']));
 
 

$Submit= Trim(stripslashes($_POST['Submit'])); 


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "f_name ";
$Body .= $F_Name;
$Body .= "\n";
$Body .= "l_name: ";
$Body .= $L_Name;
$Body .= "\n";
$Body .= "email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "coc ";
$Body .= $Country;
$Body .= "\n";
$Body .= "study ";
$Body .= $Study;
$Body .= "\n";
$Body .= "enquiry ";
$Body .= $Enquiry ;
$Body .= "\n";
$Body .= "submit ";
$Body .= $Submit;
$Body .= "\n";
// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=landing2.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>