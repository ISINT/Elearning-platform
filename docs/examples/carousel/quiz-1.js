$(document).ready(function() 
{    $("#results").click(function() {                

if (
!$("input[name='q1']:checked").val() ||            
!$("input[name='q2']:checked").val() ||            
!$("input[name='q3']:checked").val() ||            
!$("input[name='q4']:checked").val() ||            
!$("input[name='q5']:checked").val() ||            
!$("input[name='q6']:checked").val() ||            
!$("input[name='q7']:checked").val() ||            
!$("input[name='q8']:checked").val() ||            
!$("input[name='q9']:checked").val() ||            
!$("input[name='q10']:checked").val() ||            
!$("input[name='q11']:checked").val() ||            
!$("input[name='q12']:checked").val() ||            
!$("input[name='q13']:checked").val() ||            
!$("input[name='q14']:checked").val() ||            
!$("input[name='q15']:checked").val() ||            
!$("input[name='q16']:checked").val() ||            
!$("input[name='q17']:checked").val() ||            
!$("input[name='q18']:checked").val() ||            
!$("input[name='q19']:checked").val() ||            
!$("input[name='q20']:checked").val() ||            
!$("input[name='q21']:checked").val() ||            
!$("input[name='q22']:checked").val() ||            
!$("input[name='q23']:checked").val() ||            
!$("input[name='q24']:checked").val() ||            
!$("input[name='q25']:checked").val() ||            
!$("input[name='q26']:checked").val() ||            
!$("input[name='q27']:checked").val()          
) {            
alert("Sorry, buy you are not done yet!");        
}        

else {            
var cat1name = "1";            
var cat2name = "2";            
var cat3name = "3";            
var cat4name = "4";            
var cat5name = "5";            
var cat6name = "6";            
var cat7name = "7";            
var cat8name = "8";            
var cat9name = "9";            
var cat10name = "10";            
var cat11name = "11";            
var cat12name = "12";            
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
var cat25name = "25";            
var cat26name = "26";            
var cat27name = "27";                      
var cat28name = "None";            
            

var cat1 = ($("input[name='q1']:checked").val() != "a");           
var cat2 = ($("input[name='q2']:checked").val() != "b");  
var cat3 = ($("input[name='q3']:checked").val() != "c");  
var cat4 = ($("input[name='q4']:checked").val() != "d");  
var cat5 = ($("input[name='q5']:checked").val() != "a"); 
var cat6 = ($("input[name='q6']:checked").val() != "b");
var cat7 = ($("input[name='q7']:checked").val() != "c");
var cat8 = ($("input[name='q8']:checked").val() != "d");
var cat9 = ($("input[name='q9']:checked").val() != "a");
var cat10 = ($("input[name='q10']:checked").val() != "b");
var cat11 = ($("input[name='q11']:checked").val() != "a");
var cat12 = ($("input[name='q12']:checked").val() != "d");
var cat13 = ($("input[name='q13']:checked").val() != "b"); 
var cat14 = ($("input[name='q14']:checked").val() != "a"); 
var cat15 = ($("input[name='q15']:checked").val() != "c"); 
var cat16 = ($("input[name='q16']:checked").val() != "b"); 
var cat17 = ($("input[name='q17']:checked").val() != "b"); 
var cat18 = ($("input[name='q18']:checked").val() != "d"); 
var cat19 = ($("input[name='q19']:checked").val() != "c"); 
var cat20 = ($("input[name='q20']:checked").val() != "b"); 
var cat21 = ($("input[name='q21']:checked").val() != "d"); 
var cat22 = ($("input[name='q22']:checked").val() != "b"); 
var cat23 = ($("input[name='q23']:checked").val() != "c"); 
var cat24 = ($("input[name='q24']:checked").val() != "b"); 
var cat25 = ($("input[name='q25']:checked").val() != "c"); 
var cat26 = ($("input[name='q26']:checked").val() != "a"); 
var cat27 = ($("input[name='q27']:checked").val() != "a");

var cat28 = (!cat1 && !cat2 && !cat3 && 
			 !cat4 && !cat5 && !cat6 && 
			 !cat7 && !cat8 && !cat9 && 
			 !cat10 && !cat11 && !cat12 && 
			 !cat13 && !cat14 && !cat15 &&
			 !cat16 && !cat17 && !cat18 &&
			 !cat19 && !cat20 && !cat21 &&
			 !cat22 && !cat23 && !cat24 &&
			 !cat25 && !cat26 && !cat27
			); var categories = [];                        

if (cat1) { categories.push(cat1name) };            
if (cat2) { categories.push(cat2name) };            
if (cat3) { categories.push(cat3name) };            
if (cat4) { categories.push(cat4name) };            
if (cat5) { categories.push(cat5name) };            
if (cat6) { categories.push(cat6name) };            
if (cat7) { categories.push(cat7name) };            
if (cat8) { categories.push(cat8name) };            
if (cat9) { categories.push(cat9name) };            
if (cat10) { categories.push(cat10name) };            
if (cat11) { categories.push(cat11name) };
if (cat12) { categories.push(cat12name) };
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
if (cat25) { categories.push(cat25name) };
if (cat26) { categories.push(cat26name) };
if (cat27) { categories.push(cat27name) };
if (cat28) { categories.push(cat28name) };
var catStr = 'følgende svar er feil: ' + categories.join(', ') + '';                     
$("#categorylist").text(catStr);                        
$("#categorylist").show("slow");            

if (cat1) { $("#category1").show("slow"); };            
if (cat2) { $("#category2").show("slow"); };            
if (cat3) { $("#category3").show("slow"); };            
if (cat4) { $("#category4").show("slow"); };            
if (cat5) { $("#category5").show("slow"); };            
if (cat6) { $("#category6").show("slow"); };            
if (cat7) { $("#category7").show("slow"); };            
if (cat8) { $("#category8").show("slow"); };            
if (cat9) { $("#category9").show("slow"); };            
if (cat10) { $("#category10").show("slow"); };            
if (cat11) { $("#category11").show("slow"); };           
if (cat12) { $("#category12").show("slow"); };           
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
if (cat25) { $("#category25").show("slow"); };           
if (cat26) { $("#category26").show("slow"); };           
if (cat27) { $("#category27").show("slow"); };           
if (cat28) { $("#category28").show("slow"); };
{ $("#closing").show("slow"); };
}
    });});