<?php

	@$submitMessage=$_POST["submitMessage"];
	if($submitMessage) 
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$username=$_POST["username"];
		$message=$_POST["message"];

		if (!$name||!$email||!$message)
		{
			print("Please enter your name, email and the message you want to send to us");
		}

		else
		{
			include("db-tilkobling.php");

			$sqlSetning=" INSERT INTO elearningmessage (name,email,username,message) VALUES('$name','$email','$username','$message');";
			mysqli_query($db,$sqlSetning) or die ("Could not write to database");
			print(" The following message is sent: <br/> $message");				
		
		}
	}
?>