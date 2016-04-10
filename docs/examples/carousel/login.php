
<?php


    @$loginButton=$_POST["loginButton"];
    if ($loginButton)
    {
        include("check.php");
        
        $username=$_POST["username"];
        $userPassword=$_POST["userPassword"];
        
        if (!checkUsernamePassword($username, $userPassword))
        {
            print("<h2>Wrong username or password, try again!</h2> <br/>");
        }
        else
        {
            @session_start();
            $_SESSION["username"]=$username;
            print("<META HTTP-EQUIV='Refresh' CONTENT='0;URL=profile-page.php'>");  
        }
    }

?>