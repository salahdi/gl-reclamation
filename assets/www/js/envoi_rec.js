// JavaScript Document

function envoi(){
	xhr = new XMLHttpRequest();
	var URL="http://www.seifwares.comuf.com/send.php?param1="+document.f.sujet.value+"&param2="+document.f.contenurec.value;
	xhr.open("GET",URL,true);
	xhr.send(null);
	xhr.onreadystatechange= executer;
	
	
	function executer(){
		
		document.getElementById("id3").innerHTML= xhr.responseText;
		}
	
	}
