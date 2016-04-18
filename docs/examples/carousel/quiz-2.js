$(document).ready(function() 
{    $("#results").click(function() {                

if (            
!$("input[name=q13]:checked").val() ||            
!$("input[name=q14]:checked").val() ||            
!$("input[name=q15]:checked").val() ||            
!$("input[name=q16]:checked").val() ||            
!$("input[name=q17]:checked").val() ||            
!$("input[name=q18]:checked").val() ||            
!$("input[name=q19]:checked").val() ||            
!$("input[name=q20]:checked").val() ||            
!$("input[name=q21]:checked").val() ||            
!$("input[name=q22]:checked").val() ||            
!$("input[name=q23]:checked").val() ||            
!$("input[name=q24]:checked").val()           
) {            
alert("All Quesions need an answear!");        
}        

else {            
var cat13name = "13";            
var cat14name = "14";            
var cat15name = "15";            
var cat16name = "16";            
var cat17name = "17";            
var cat18name = "18";            
var cat19name = "19";            
var cat20name = "20";            
var cat21name = "21";            
var cat22name = "22";            
var cat23name = "23";            
var cat24name = "24";                     
var cat28name = "None";            
            

var cat13 = ($("input[name=q13]:checked").val() != "b"); 
var cat14 = ($("input[name=q14]:checked").val() != "a"); 
var cat15 = ($("input[name=q15]:checked").val() != "c"); 
var cat16 = ($("input[name=q16]:checked").val() != "b"); 
var cat17 = ($("input[name=q17]:checked").val() != "b"); 
var cat18 = ($("input[name=q18]:checked").val() != "d"); 
var cat19 = ($("input[name=q19]:checked").val() != "c"); 
var cat20 = ($("input[name=q20]:checked").val() != "b"); 
var cat21 = ($("input[name=q21]:checked").val() != "d"); 
var cat22 = ($("input[name=q22]:checked").val() != "b"); 
var cat23 = ($("input[name=q23]:checked").val() != "c"); 
var cat24 = ($("input[name=q24]:checked").val() != "b");

var cat28 = (!cat13 && !cat14 && !cat15 &&
			 !cat16 && !cat17 && !cat18 &&
			 !cat19 && !cat20 && !cat21 &&
			 !cat22 && !cat23 && !cat24
			); var categories = [];                        

if (cat13) { categories.push(cat13name) };
if (cat14) { categories.push(cat14name) };
if (cat15) { categories.push(cat15name) };
if (cat16) { categories.push(cat16name) };
if (cat17) { categories.push(cat17name) };
if (cat18) { categories.push(cat18name) };
if (cat19) { categories.push(cat19name) };
if (cat20) { categories.push(cat20name) };
if (cat21) { categories.push(cat21name) };
if (cat22) { categories.push(cat22name) };
if (cat23) { categories.push(cat23name) };
if (cat24) { categories.push(cat24name) };
if (cat28) { categories.push(cat28name) };
var catStr = 'følgende svar er feil: ' + categories.join(', ') + '';                     
$("#categorylist").text(catStr);                        
$("#categorylist").show("slow");            
         
if (cat13) { $("#category13").show("slow"); };           
if (cat14) { $("#category14").show("slow"); };           
if (cat15) { $("#category15").show("slow"); };           
if (cat16) { $("#category16").show("slow"); };           
if (cat17) { $("#category17").show("slow"); };           
if (cat18) { $("#category18").show("slow"); };           
if (cat19) { $("#category19").show("slow"); };           
if (cat20) { $("#category20").show("slow"); };           
if (cat21) { $("#category21").show("slow"); };           
if (cat22) { $("#category22").show("slow"); };           
if (cat23) { $("#category23").show("slow"); };           
if (cat24) { $("#category24").show("slow"); };           
if (cat28) { $("#category28").show("slow"); print("<META HTTP-EQUIV='Refresh' CONTENT='0;URL=accomplishments.php'>"); };
{ $("#closing").show("slow"); };
}
    });});