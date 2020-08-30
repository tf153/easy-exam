var login=document.getElementById('login-btn');
var signup=document.getElementById('signup-btn');
var login_popup=document.getElementById('login-box');
var signup_popup=document .getElementById('signup-box');
var span1 = document.getElementsByClassName("close")[0];
var span2= document.getElementsByClassName("close")[1];
login.onclick=function(){
  login_popup.style.display="block";
}
signup.onclick=function(){
  signup_popup.style.display="block";
}
window.onclick = function(event) {
	if (event.target == login_popup||event.target == signup_popup) {
		login_popup.style.display = "none";
    signup_popup.style.display = "none";
	}
}
span1.onclick = function() {
	login_popup.style.display = "none";
}
span2.onclick = function() {
	signup_popup.style.display = "none";
}
