function checkPasswords() {
	var password = document.getElementById('password').value; 
	var rePassword = document.getElementById('repassword').value;
	if(password != rePassword) {
		alert("The Passwords did not match. Please try again."); 
		return false;
	}
	else
		return true;
	// else {
	// 	document.getElementById('createForm').setAttribute('action') = "http://localhost/insert.php";
	// 	document.getElementById('createForm').setAttribute('method') = "post";
	// }

}