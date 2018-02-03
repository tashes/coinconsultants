<?php
	
	$errorMSG = "";
	
	// NAME
	if (empty($_POST["name"])) {
	    $errorMSG = "Name is required ";
	} else {
	    $name = $_POST["name"];
	}
	// EMAIL
	if (empty($_POST["email"])) {
	    $errorMSG .= "Email is required ";
	} else {
	    $email = $_POST["email"];
	}
	// MESSAGE
	if (empty($_POST["message"])) {
	    $errorMSG .= "Message is required ";
	} else {
	    $message = $_POST["message"];
	}
	//SUBJECT
	if (empty($_POST["subject"])) {
	    $errorMSG .= "Subject is required ";
	} else {
	    $subject = $_POST["subject"];
	}

	$formcontent="From: {$name} \n Email: {$email} \n Subject: {$subject} \n Message: {$message}";
	$emailto="enquiries@coinconsultants.co.uk";
	$success=mail($emailto, $subject, $formcontent);
	if($success)
	{
		echo "OK";
	}
	else
	{
		if($errorMSG="")
		{
			echo "invalid";
		}
		else{
			echo $errorMSG;
		}
	}
?>