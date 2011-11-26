
function mkpasswd() {
	var servicename = document.getElementById('servicename').value;
	var username    = document.getElementById('username').value;
	var password    = document.getElementById('password').value;
	var genpasswd = btoa(Crypto.SHA256(servicename+username+password, {asString: true})).substr(0,8);
	document.getElementById('genpasswd').value = genpasswd;
}
