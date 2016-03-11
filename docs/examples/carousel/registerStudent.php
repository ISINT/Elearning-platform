<?php

	@$submitStudentButton=$_POST["submitStudentButton"];
	if($submitStudentButton) 
	{
		$firstName=$_POST["firstName"];
		$surname=$_POST["surname"];
		$username=$_POST["username"];
		$password=$_POST["password"];

		if (!$firstName||!$surname||!$username||!$password)
		{
			print("Please enter your first name, surname, username and create password");
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
				$sqlSetning=" INSERT INTO elearning (firstName,surname,username,password) VALUES('$firstName','$surname','$username','$password');";
				mysqli_query($db,$sqlSetning) or die ("Could not write to database");
				print(" $firstName $surname , you are now registered with the username $username");				
			}
		}

	}
?>