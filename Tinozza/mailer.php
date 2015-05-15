<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $name =$_REQUEST['name'];
  $email = $_REQUEST['email'] ;
  $phone = $_REQUEST['phone'] ;
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['msg'] ;
 
 
 $emailTo = 'customercare@tinozza.com'; //Put your own email address here
		$body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nPhone no: $phone\n\nComments:\n $message";
		$headers = 'From: <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;

		mail($emailTo, $subject, $body, $headers);
  echo "Thank you for Contacting us. We will be in touch with you soon. ";
  }
else
//if "email" is not filled out, display the form
  {
  echo "Go back and complete the form";
  }
?>