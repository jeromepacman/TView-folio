<?php	
	if (empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$optin = $_POST['optin'];
	
	$to = 'contact@tview.fr'; // Email submissions to site email

	// Create email	
	$email_subject = "Message from Tview";
	$email_body = "Nouveau message \n\n".
				  "Name: $name \nEmail: $email \nMessage: $message \nOptin: $optin \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@tview.fr\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>