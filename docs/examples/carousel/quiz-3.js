$(document).ready(function() 
{    $("#results").click(function() {                

if (            
            
!$("input[name=q25]:checked").val() ||            
!$("input[name=q26]:checked").val() ||            
!$("input[name=q27]:checked").val()          
) {            
alert("All Quesions need an answear!");        
}        

else {            
           
var cat25name = "25";            
var cat26name = "26";            
var cat27name = "27";                      
var cat28name = "None";            
            


var cat25 = ($("input[name=q25]:checked").val() != "c"); 
var cat26 = ($("input[name=q26]:checked").val() != "a"); 
var cat27 = ($("input[name=q27]:checked").val() != "a");

var cat28 = (!cat25 && !cat26 && !cat27
			); var categories = [];                        

if (cat25) { categories.push(cat25name) };
if (cat26) { categories.push(cat26name) };
if (cat27) { categories.push(cat27name) };
if (cat28) { categories.push(cat28name) };
var catStr = 'følgende svar er feil: ' + categories.join(', ') + '';                     
$("#categorylist").text(catStr);                        
$("#categorylist").show("slow");            
         
          
if (cat25) { $("#category25").show("slow"); };           
if (cat26) { $("#category26").show("slow"); };           
if (cat27) { $("#category27").show("slow"); };           
if (cat28) { $("#category28").show("slow"); print("<META HTTP-EQUIV='Refresh' CONTENT='0;URL=accomplishments.php'>"); };
{ $("#closing").show("slow"); };
}
    });});