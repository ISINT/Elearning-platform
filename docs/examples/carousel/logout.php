<?php /* Logout - logs a user out */

    session_start();
    session_destroy();  /* ends the session */

    print("<META HTTP-EQUIV='Refresh' CONTENT='0;URL=index.html'>"); /* redirects to the home page; */
?>