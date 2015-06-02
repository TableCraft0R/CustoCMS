//feedcreeps 0.72 alpha (c) captainhandsome

 
function timeoutthread()
{
 
 var xmlhttp = new XMLHttpRequest();
var url = "feedcreeps.txt?m=" + new Date().getTime();;

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
     var ti = document.getElementById("content");
	ti.innerHTML=xmlhttp.responseText;
	console.log(xmlhttp.responseText);
 
    }
}
xmlhttp.open("GET", url, true);

xmlhttp.send();
 
 
}


