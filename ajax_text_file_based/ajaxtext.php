<?php
    
echo "
<input type='text' name='name' id='name' placeholder='name'><br>
<input type='text' name='email' id='email' placeholder='email'>  <br>

<input type='text' name='message' id='message' placeholder='your message'><br>
<button type='button' onclick='loadThanks()'>send</button> <br>

<p id='messageback'></p>

    <script>
        
function loadThanks(){
   
    let xmlhttp = new XMLHttpRequest();
    setTimeout(function() {xhttp.abort()}, 40000);
    
    xmlhttp.onreadystatechange=function()
    {    
        if (xmlhttp.readyState==4 && xmlhttp.status==200) 
        { 
           
           document.getElementById('messageback').innerHTML=xmlhttp.responseText;
        }   
        
    }
    xmlhttp.open('GET','allright.txt',true);
xmlhttp.send();
document.getElementById('message').value =' ';
} 
    </script>


";
?>