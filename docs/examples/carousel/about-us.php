<?php 

session_start();
@$loggedInnUser=$_SESSION["username"];

	if (!$loggedInnUser)
	{
print("<h2>Log in is required to access this page!</h2> <br/>");
	}
	else
	{
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>About us</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
      
    <!-- Font Awesome core css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      </head>
    <body>
        
     <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home-page.html"><img src="images/MC_logo.png" alt="Math corner logo" style="width:180px;height:50px;"> </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li ><a href="topics.php">Topics</a></li>
            <li class="active"><a href="about-us.php">About us</a></li>
            <li><a href="contact-us.php">Contact us</a></li>
          </ul>
             <form class="navbar-form navbar-right" action="logout.php">
        <button class="btn btn-primary" >Log out</button>
        </form>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
        
        
        <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
        
            <h2 style="text-align:center">The MathCorner team</h2>
                 
                  
    <table class="table">
           
        <tbody>
        <tr>
        <td><img class="img-rounded" src="images/frank.jpg" alt="picture of Frank" width="140" height="150" align="center"></td>
        <td><h4>Name: Frank Ofori Asiedu<br/><br/>Role: Developer </h4></td>
            </tr>
            <tr>
                <td><img class="img-rounded" src="images/veronika.jpg" alt="picture of Veronika" width="140" height="150" align="center"></td>
                <td><h4>Name: Veronika Bojanowski<br/><br/>Role: Developer </h4></td>
            </tr>
                <tr>
                    <td><img class="img-rounded" src="images/vegar.jpg" alt="picture of Vegar" width="140" height="150" align="center"></td>
                    <td><h4>Name: Vegar Fredriksen<br/><br/>Role: Developer </h4></td>
            </tr>
                <tr>
                    <td><img class="img-rounded" src="images/henrik.jpg" alt="picture of Henrik" width="140" height="150" align="center"></td>
                    <td><h4>Name: Henrik Wenn Nesset<br/><br/>Role: Developer </h4></td>
                </tr>
                <tr>
                    <td><img class="img-rounded" src="images/imen.jpg" alt="picture of Imen" width="140" height="150" align="center"></td>
                    <td><h4>Name: Imen Vinje<br/><br/>Role: Developer </h4></td>
                </tr>
      
                </tbody>
         </table>
         <hr>
        
         </div>
           
         
     </div><!--/.col-xs-12.col-sm-9-->
          
           <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            
            <a href="profile-page.php" class="list-group-item">Your profile</a>
            <a href="gallery.php" class="list-group-item">Photo Gallery</a>
            <a href="accomplishments.php" class="list-group-item">Accomplishments</a>
            <a href="relevantlinks.php" class="list-group-item">Relevant Links</a>
            <a href="http://barclayscodeplayground.co.uk/" class="list-group-item" target="_blank">Programming for kids</a>
            
              
            
          </div>
       
            
            
              <div class="list-group-item">
              <h3 style="color: #3399ff;">NEWS FEED</H3>
                <p style="color: black;"> We have released a new geometry topic! </br> </br>   20.03.2016</p>
                  <a href="blog.html"> Click for more</a>
                </br></br></br>
                  <p style="color: black;"> We have released a new fun multiplication topic! </br> </br>   20.03.2016</p>
                    <a href="blog.html"> Click for more</a>
              
         
              
            
          </div>
        </div><!--/.sidebar-offcanvas-->

          
        </div><!--/row-->
        
        
        <hr>

       <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 IS/INT1000 Group 5 - Created by Frank, Henrik, Veronika, Vegar og Imen. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          <div class="navbar-text pull-right" > 
            <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
            <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
            
          </div>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="offcanvas.js"></script>
  </body>
</html>

<?php
 }
?>