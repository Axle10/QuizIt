// init aos
AOS.init();

var logincard = document.getElementById('logincard');
var signupcard = document.getElementById('signupcard');

var logintab = document.getElementById('logintab');
var signuptab = document.getElementById('signuptab');;

logincard.classList.add("active");


// Activate LoginForm
function activateLoginForm()
{
	signupcard.classList.remove('active');
	logincard.classList.add('active');
	signuptab.classList.remove('active');
	logintab.classList.add('active');
}

// Activate Signup form
function activateSignupForm()
{
	signupcard.classList.add('active');
	logincard.classList.remove('active');
	signuptab.classList.add('active');
	logintab.classList.remove('active')
}