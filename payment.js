function validateCardNumber() {
	var cardNumber = document.getElementById("cardNumber").value;
	if(cardNumber.length != 16) 
		alert("Enter a valid card number");
}

function windowSize(x) {
  if (x.matches) { // If media query matches
    document.getElementById('payTable') = '<tr><th id="colWidth1"></th></tr><tr><td>First Name</td></td></tr>';
  } 
}

var x = window.matchMedia("(max-width: 768px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction)