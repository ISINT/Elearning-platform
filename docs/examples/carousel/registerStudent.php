<?php

	@$submitStudentButton=$_POST["submitStudentButton"];
	if($submitStudentButton) 
	{
		$firstName=$_POST["firstName"];
		$surname=$_POST["surname"];
		$username=$_POST["username"];
		$userPassword=$_POST["userPassword"];

		if (!$firstName||!$surname||!$username||!$userPassword)
		{
			print("Please enter your first name, surname, username and create userPassword");
		}

		else
		{
			include("db-tilkobling.php");

			$sqlSetning="SELECT * FROM elearning WHERE username='$username';";
			$sqlResultat=mysqli_query($db,$sqlSetning) or die ("no connection to database");
			$antallRader=mysqli_num_rows($sqlResultat);

			if($antallRader!=0)
			{
				print("Username already exist");
			}

			else
			{
				$sqlSetning=" INSERT INTO elearning (firstName,surname,username,userPassword) VALUES('$firstName','$surname','$username','$userPassword');";
				mysqli_query($db,$sqlSetning) or die ("Could not write to database");
				print(" $firstName $surname , you are now registered with the username $username");				
			}
		}

	}
?>