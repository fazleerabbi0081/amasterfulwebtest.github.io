<?php

	$EmailFrom = "salmanhiderbd@gmail.com";
	$EmailTo = "arifahmed00000@gmail.com";
	$Name = Trim(stripslashes($_POST['Name']));
	$Email = Trim(stripslashes($_POST['Email']));
	$Country = Trim(stripslashes($_POST['Country'])); 

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
	$Body .= "Select Country: ";
	$Body .= $Country;
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