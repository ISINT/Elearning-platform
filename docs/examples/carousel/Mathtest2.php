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
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Addition and Subtraction</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
      
        
    <!-- Font Awesome core css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="quizaddon.css" rel="stylesheet">

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
            <li><a href="topics.php">Topics</a></li>
            <li><a href="about-us.php">About us</a></li>
            <li><a href="contactUs.php">Contact us</a></li>
          </ul>
            <form class="navbar-form navbar-right" action="logout.php">
        <button class="btn btn-primary" >Log out</button>
        </form>
            
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
             
    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">
          <h3 class="masthead-brand">Addition and Subtraction</h3>
          <div class="row">
          <div class="col-sm-4 box1">
          <h3>Addition and Subtraction</h3>
            <h4>Level 1</h4>
              <h5 class="question text-center">16+3</h5>        

              <form class="answers">           
                <input type="radio" name="q13" value="a" id="q13a" class="answers"><label for="q13a">20</label><br/>            
                <input type="radio" name="q13" value="b" id="q13b" class="answers"><label for="q13b">19</label><br/>            
                <input type="radio" name="q13" value="c" id="q13c" class="answers"><label for="q13c">18</label><br/>            
                <input type="radio" name="q13" value="d" id="q13d" class="answers"><label for="q13d">13</label><br/>        
              </form>        
        <hr size=1>
              <h5 class="question text-center">11+1</h5>        

              <form class="answers">           
                <input type="radio" name="q14" value="a" id="q14a" class="answers"><label for="q14a">12</label><br/>            
                <input type="radio" name="q14" value="b" id="q14b" class="answers"><label for="q14b">13</label><br/>            
                <input type="radio" name="q14" value="c" id="q14c" class="answers"><label for="q14c">11</label><br/>            
                <input type="radio" name="q14" value="d" id="q14d" class="answers"><label for="q14d">10</label><br/>        
              </form>        
        <hr size=1>
              <h5 class="question text-center">17+3</h5>        

              <form class="answers">           
                <input type="radio" name="q15" value="a" id="q15a" class="answers"><label for="q15a">22</label><br/>            
                <input type="radio" name="q15" value="b" id="q15b" class="answers"><label for="q15b">21</label><br/>            
                <input type="radio" name="q15" value="c" id="q15c" class="answers"><label for="q15c">20</label><br/>            
                <input type="radio" name="q15" value="d" id="q15d" class="answers"><label for="q15d">19</label><br/>        
              </form>        
      
        <hr size=1>
              <h5 class="question text-center">20+10</h5>        

              <form class="answers">           
                <input type="radio" name="q16" value="a" id="q16a" class="answers"><label for="q16a">40</label><br/>            
                <input type="radio" name="q16" value="b" id="q16b" class="answers"><label for="q16b">30</label><br/>            
                <input type="radio" name="q16" value="c" id="q16c" class="answers"><label for="q16c">29</label><br/>            
                <input type="radio" name="q16" value="d" id="q16d" class="answers"><label for="q16d">39</label><br/>        
              </form>        
            </div>
          <div class="col-sm-4 box2">
            <h3>Addition and Subtraction</h3>
              <h4>Level 2</h4>
                <h5 class="question text-center"> What is     7+5</h5>    

                <form class="answers">           
                  <input type="radio" name="q17" value="a" id="q17a" class="answers"><label for="q17a">13</label><br/>            
                  <input type="radio" name="q17" value="b" id="q17b" class="answers"><label for="q17b">12</label><br/>            
                  <input type="radio" name="q17" value="c" id="q17c" class="answers"><label for="q17c">11</label><br/>            
                  <input type="radio" name="q17" value="d" id="q17d" class="answers"><label for="q17d">14</label><br/>        
                </form>        
        <hr size=1>
                <h5 class="question text-center"> What is 18+6</h5>        

                <form class="answers">           
                  <input type="radio" name="q18" value="a" id="q18a" class="answers"><label for="q18a">25</label><br/>            
                  <input type="radio" name="q18" value="b" id="q18b" class="answers"><label for="q18b">23</label><br/>            
                  <input type="radio" name="q18" value="c" id="q18c" class="answers"><label for="q18c">22</label><br/>            
                  <input type="radio" name="q18" value="d" id="q18d" class="answers"><label for="q18d">24</label><br/>        
                </form>        
        <hr size=1>
                <h5 class="question text-center"> What is 66+0</h5>        

                <form class="answers">           
                  <input type="radio" name="q19" value="a" id="q19a" class="answers"><label for="q19a">65</label><br/>            
                  <input type="radio" name="q19" value="b" id="q19b" class="answers"><label for="q19b">67</label><br/>            
                  <input type="radio" name="q19" value="c" id="q19c" class="answers"><label for="q19c">66</label><br/>            
                  <input type="radio" name="q19" value="d" id="q19d" class="answers"><label for="q19d">75</label><br/>        
                </form>        
        <hr size=1>
                <h5 class="question text-center"> What is 17+8</h5>        

                <form class="answers">           
                  <input type="radio" name="q20" value="a" id="q20a" class="answers"><label for="q20a">24</label><br/>            
                  <input type="radio" name="q20" value="b" id="q20b" class="answers"><label for="q20b">25</label><br/>            
                  <input type="radio" name="q20" value="c" id="q20c" class="answers"><label for="q20c">26</label><br/>            
                  <input type="radio" name="q20" value="d" id="q20d" class="answers"><label for="q20d">22</label><br/>        
                </form>        
            </div>


            <div class="col-sm-4 box3">
              <h3>Addition and Subtraction</h3>
                <h4>Level 3</h4>
                <h5 class="question text-center">57+11</h5>        

                  <form class="answers">           
                    <input type="radio" name="q21" value="a" id="q21a" class="answers"><label for="q21a">62</label><br/>            
                    <input type="radio" name="q21" value="b" id="q21b" class="answers"><label for="q21b">26</label><br/>            
                    <input type="radio" name="q21" value="c" id="q21c" class="answers"><label for="q21c">65</label><br/>            
                    <input type="radio" name="q21" value="d" id="q21d" class="answers"><label for="q21d">68</label><br/>        
                  </form>        
          <hr size=1>
                <h5 class="question text-center">92+9</h5>        

                  <form class="answers">           
                    <input type="radio" name="q22" value="a" id="q22a" class="answers"><label for="q22a">102</label><br/>            
                    <input type="radio" name="q22" value="b" id="q22b" class="answers"><label for="q22b">101</label><br/>            
                    <input type="radio" name="q22" value="c" id="q22c" class="answers"><label for="q22c">100</label><br/>            
                    <input type="radio" name="q22" value="d" id="q22d" class="answers"><label for="q22d">99</label><br/>        
                  </form>        

          <hr size=1>
                <h5 class="question text-center">54+63</h5>        

                  <form class="answers">           
                    <input type="radio" name="q23" value="a" id="q23a" class="answers"><label for="q23a">115</label><br/>            
                    <input type="radio" name="q23" value="b" id="q23b" class="answers"><label for="q23b">112</label><br/>            
                    <input type="radio" name="q23" value="c" id="q23c" class="answers"><label for="q23c">117</label><br/>            
                    <input type="radio" name="q23" value="d" id="q23d" class="answers"><label for="q23d">114</label><br/>        
                  </form>        

          <hr size=1>
                <h5 class="question text-center">32+28</h5>        

                  <form class="answers">           
                    <input type="radio" name="q24" value="a" id="q24a" class="answers"><label for="q24a">62</label><br/>            
                    <input type="radio" name="q24" value="b" id="q24b" class="answers"><label for="q24b">60</label><br/>            
                    <input type="radio" name="q24" value="c" id="q24c" class="answers"><label for="q24c">65</label><br/>            
                    <input type="radio" name="q24" value="d" id="q24d" class="answers"><label for="q24d">56</label><br/>        
                  </form>       
            </div>
           
      </div>

<br/>

<div id="results">            
Show me the answers!       
</div>   
<div id="category13">            
<p>                
<strong>Question was wrong:</strong> The answear to 16+3 is <strong>19</strong>.</p>        
</div>    
<div id="category14">            
<p>                
<strong>Question was wrong:</strong> The answear to 11+1 is <strong>12</strong>.</p>        
</div>    
<div id="category15">            
<p>                
<strong>Question was wrong:</strong> The answear to 17+3 is <strong>20</strong>.</p>        
</div>    
<div id="category16">            
<p>                
<strong>Question was wrong:</strong> The answear to 20+10 is <strong>30</strong>.</p>        
</div>    
<div id="category17">            
<p>                
<strong>Question was wrong:</strong> The answear to 7+5 is <strong>13</strong>.</p>        
</div>   
<div id="category18">            
<p>                
<strong>Question was wrong:</strong> The answear to 18+6 is <strong>24</strong>.</p>        
</div>
<div id="category19">            
<p>                
<strong>Question was wrong:</strong> The answear to 66+0 is <strong>66</strong>.</p>        
</div>         
<div id="category20">            
<p>                
<strong>Question was wrong:</strong> The answear to 17+8 is <strong>25</strong>.</p>        
</div>
<div id="category21">            
<p>                
<strong>Question was wrong:</strong> The answear to 57+11 is <strong>68</strong>.</p>        
</div>
<div id="category22">            
<p>                
<strong>Question was wrong:</strong> The answear to 92+9 is <strong>101</strong>.</p>        
</div>
<div id="category23">            
<p>                
<strong>Question was wrong:</strong> The answear to 54+63 is <strong>117</strong>.</p>        
</div>
<div id="category24">            
<p>                
<strong>Question was wrong:</strong> The answear to 32+28 is <strong>625</strong>.</p>        
</div>
<div id="category28">            
<p>                
Alle er korrekte!</p>

<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="https://home.hbv.no/11091/eLearn/examples/carousel/accomplishments.php";
            }
         //-->
      </script>
   <p>Click the following button, you will be redirected to home page.</p>
      
      <form>
         <input type="button" value="Redirect Me" onclick="Redirect();" />
      </form>
</div>      
</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="quiz-2.js"></script>

</div>

          <div class="mastfoot">
            <div class="inner">
              <p>Created by Frank, Henrik, Veronika, Vegar and Imen - Copyright © 2016</p>
            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php
    }
    ?>