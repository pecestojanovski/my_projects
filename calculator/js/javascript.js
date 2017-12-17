window.onload = function() {

var results, output, limit, zero, operator;

results = document.getElementById("result");

document.querySelector(".zero").addEventListener("click",function()
{
  zero = this.value;
  if(results.innerHTML === "")
  {
    output = results.innerHTML = zero;
  }
  else if(results.innerHTML === output)
  {
    output = results.innerHTML +=zero;
  }
},
false);
    
document.querySelector("#equal-btn").addEventListener("click",function()
{        
  if(results.innerHTML === output)
  {         
    results.innerHTML = eval(output);
  }        
  else 
  {
    results.innerHTML = "";
  }         
},
false);
    
 document.querySelector("#delete").addEventListener("click",function()
 {       
  results.innerHTML = "";       
},
false);

var elem = document.querySelectorAll('.num')
var len = elem.length;
  for(i = 0; i < len; i++)
  {
    elem[i].addEventListener('click', function()
    {
      num = this.value;
      output = results.innerHTML += num;
      limit = output.length;
      if(limit > 16)
      {
        arert("No more digits allowed");
      }
    },
    false);
  }
    
var elem1 = document.querySelectorAll(".operator");
var len1 = elem1.length;
  for(var i = 0; i < len1; i++ ) 
  {        
    elem1[i].addEventListener("click",function() 
    {         
      operator = this.value;         
      if(results.innerHTML === "") 
      {            
        results.innerHTML = results.innerHTML.concat("");            
      }       
      else if(output) {       
        results.innerHTML = output.concat(operator);           
      }          
    },
    false);         
  }   
}