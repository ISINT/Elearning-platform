<?php /* Checks that username and password are correct */


function checkUsernamePassword($username, $userPassword)
{
    /* Returns true if username and password are correct and false otherwise*/
    
    
    include("db-tilkobling.php");
    
    $registeredUser=true;
    
    $sqlSetning="SELECT * FROM elearning WHERE username='$username';";
    $sqlResultat=mysqli_query($db, $sqlSetning);
    
    if (!$sqlResultat)
    {
         $registeredUser=false;
    }
    else
    {
        $rad=mysqli_fetch_array($sqlResultat);
        $lagretBrukernavn=$rad["username"];
        $lagretPassord=$rad["userPassword"];
        
        $userPassword=md5($userPassword); /*innparameter-passord kryptert med md5-funksjonen*/
        
        if ($username !=$lagretBrukernavn || $userPassword !=$lagretPassord)
        {
            $registeredUser=false;
        }
    }
    return $registeredUser;
}

?>