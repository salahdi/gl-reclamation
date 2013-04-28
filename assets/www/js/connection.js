 
 
 
function userlogin()
{ 
localStorage.setItem('seif', 'seifpass');
localStorage.setItem('client', 'clientpass');

login=$("#username").val();
password=$("#password").val();
//alert(localStorage.)



//for(var i=0, len=localStorage.length; i<len; i++) {
   // var key = localStorage.key(i);
    //var value = localStorage[key];
	if((localStorage.login!="undefined") && (localStorage[login]==password))
	window.location="choix.html";
else
{
	document.getElementById("erreur").innerHTML= "Mot de passe ou login incorrecte ";

}

	
    


}