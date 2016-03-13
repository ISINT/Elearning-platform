function fokus(element)
{
  element.style.background="yellow";
}  


function mistetFokus(element)
{
  element.style.background="white";
}  

function musInn(element)
{
  document.getElementById("melding").style.color="black";	
  if (element==document.getElementById("firstName"))
    {
      document.getElementById("melding").innerHTML="Your name will be on your diploma, so make sure to enter your full name";
    }
  if (element==document.getElementById("surname"))
    {
      document.getElementById("melding").innerHTML="Your name will be on your diploma, so make sure to enter your full name";
    }
  if (element==document.getElementById("username"))
    {
      document.getElementById("melding").innerHTML="Your username is the name that will be visable when you're logged in";
    }
  if (element==document.getElementById("userPassword"))
    {
      document.getElementById("melding").innerHTML="Your password needs to be at least 6 characters long";
    }
}  

function musUt()
{
  document.getElementById("melding").innerHTML="";
}  

function fjernMelding()
{
  document.getElementById("melding").innerHTML="";   
}  