<?php

	$EmailFrom = "salmanhiderbd@gmail.com";
	$EmailTo = "arifahmed00000@gmail.com";
	$Name = Trim(stripslashes($_POST['Name']));
	$Name = Trim(stripslashes($_POST['Last']));
	$Phone = Trim(stripslashes($_POST['Phone']));
	$Email = Trim(stripslashes($_POST['Email'])); 
	

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
	$Body .= "Last: ";
	$Body .= $Last;
	$Body .= "\n";
	$Body .= "Phone: ";
	$Body .= $Phone;
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $Email;
	$Body .= "\n";

	// send email 
	$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

	// redirect to success page 
	if ($success){
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
	}
	else{
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
	}
?>