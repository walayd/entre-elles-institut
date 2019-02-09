Votre message est envoyé avec succès, redirection vers le site dans 5 secondes
<?php
	
	$userName 		= $_POST['name'];
	$userEmail	 	= $_POST['email'];
	$userMessage 		= $_POST['message'];
	$to 			= "entreellesinstitut@gmail.com";
	$subject 		= "entreellesinstitut - formulaire de contact";
	$body 			= "Les informations entrés:";
	$body .= "\r\n Name: " . $userName;
	$body .= "\r\n Email: " . $userEmail;
	$body .= "\r\n Message: " . $userMessage;
	mail($to, $subject, $body);
?>

<?php 
header( "refresh:5;url=index.php" );
?>