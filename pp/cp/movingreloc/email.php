<?php


$EmailTo = "fazleerabbi0081@gmail.com";
$name = Trim(stripslashes($_POST['name']));
$phone = Trim(stripslashes($_POST['phone']));
$email = Trim(stripslashes($_POST['email'])); 
 
$subject = "Contact Form";


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name:";
$Body .= $name;
$Body .= "\n";
$Body .= "Telephone number: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";





// send email 
$success = mail($EmailTo, $subject, $Body);

// redirect to success page 
if ($success){
  echo "Thank You for your query.We will be in contact with you shortly";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}
?>