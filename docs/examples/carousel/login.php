
<?php


    @$loginButton=$_POST["loginButton"];
    if ($loginButton)
    {
        include("check.php");
        
        $username=$_POST["username"];
        $userPassword=$_POST["userPassword"];
        
        if (!checkUsernamePassword($username, $userPassword))
        {
            print("Wrong username or password, try again! <br/>");
        }
        else
        {
            @session_start();
            $_SESSION["username"]=$username;
            print("<META HTTP-EQUIV='Refresh' CONTENT='0;URL=profile-page.html'>");  
        }
    }

?>