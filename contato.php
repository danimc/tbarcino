<?php

	// Contact
	$to = 'daniel_k310a@hotmail.com';
    $subject = 'Subject here...';

	
   		$name    = $_POST['name'];
    	$from    = $_POST['email'];
    	$message = $_POST['message'];

    	bool mail (string $to , string$subject , string $message
    		[, string $additional_headers [, string $additional_parameters]])
		
?>