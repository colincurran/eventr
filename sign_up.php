<<?php
//Sanitises firstname:

	$myfirstname= $_POST[â€™firstnameâ€™];
	//makes it safe to send back to clients
	$cleanfirstname = htmlentities($myfirstname, ENT_QUOTES, â€™UTF-8â€™);
	//makes safe to insert into the database
	$escapeemail= mysql_real_escape_string($myfirstname);
	
//Sanitises lastname:

	$mylastname= $_POST[â€™lastnameâ€™];
	//makes it safe to send back to clients
	$cleanlastname = htmlentities($mylastname, ENT_QUOTES, â€™UTF-8â€™);
	//makes safe to insert into the database
	$escapelastname= mysql_real_escape_string($mylastname);
	
//Sanitises Email:

	$myemail= $_POST[â€™emailâ€™];
	// Remove all illegal characters from email
	$cleanemail = filter_var($myemail, FILTER_SANITIZE_EMAIL);
	// Validate e-mail
	if (!filter_var($myemail, FILTER_VALIDATE_EMAIL) === false) {
		echo("$email is a valid email address");
	} else {
		echo("$email is not a valid email address");
	}
	
	$filteremail= filter_var($myemail, FILTER_VALIDATE_EMAIL);
	//makes safe to insert into the database
	$escapeemail= mysql_real_escape_string($filteremail);
	

//Confirm both email attempts are the same
	$mypassword= $_POST[â€™passwordâ€™];
	$mypassword1= $_POST[â€™password1â€™];

	if (!$mypassword === $mypassword1) {
		echo("Error: passwords do not match");
	} 
	else {
		echo("Passwords match");	
		//Sanitises password:
		//cleans password
		$cleanpassword = htmlentities($mypassword, ENT_QUOTES, â€™UTF-8â€™);
		//makes safe to insert into the database
		$escapepassword= mysql_real_escape_string($mypassword);
	}		
	

		
?>
