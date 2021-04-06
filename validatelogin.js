function validatelogin(formdata){
var username = formdata.user.value
var password = formdata.password.value
haveAlerted = false

if (username.length < 6 || username.length > 15){
	if(haveAlerted == false){
		alert("Username must be between 6 and 15 characters")
		haveAlerted = true
	}
}

if (username.charCodeAt(0) > 47 && username.charCodeAt(0) < 58) {
	if (haveAlerted == false){
		alert("Username can't start with a number")
		haveAlerted = true
	}
}
for(i = 0; i < username.length; i++){
		if (username.charCodeAt(i) < 48 || username.charCodeAt(i) > 57) {
			if (username.charCodeAt(i) < 65 || username.charCodeAt(i) > 90) {
				if (username.charCodeAt(i)<97 || username.charCodeAt(i) > 122){
					if (haveAlerted == false){
						alert("Username can only contain letters and digits")
						haveAlerted = true
					}
				}

			}
		}
	}

if (password.length < 6 || password.length > 15){
	if(haveAlerted == false){
		alert("Password must be between 6 and 15 characters")
		haveAlerted = true
	}
}

digcount= 0
uppercount= 0
lowercount = 0

for(i = 0; i < password.length; i++){
	if (password.charCodeAt(i) < 48 || password.charCodeAt(i) > 57) {
		if (password.charCodeAt(i) < 65 || password.charCodeAt(i) > 90) {
			if (password.charCodeAt(i)<97 || password.charCodeAt(i) > 122){
				if (haveAlerted == false){
					alert("Password can only contain letters and digits")
					haveAlerted = true					
				}
			}
		}
	}

	if (password.charCodeAt(i)>47 && password.charCodeAt(i) < 58){
		digcount += 1
	}
	else if(password.charCodeAt(i) > 64 && password.charCodeAt(i) < 91){
		uppercount+=1
		}
	else if(password.charCodeAt(i) > 96 && password.charCodeAt(i) < 123){
		lowercount+=1
		}
}
if (digcount == 0 || uppercount == 0 || lowercount == 0){
	if (haveAlerted == false){
		alert("Password must contain at least one lower case letter, one upper case letter, and one digit")
		haveAlerted = true
	}
}
if (haveAlerted == false){
	alert("User Validated")
}

}


function validateregister(formdata1){

var username1 = formdata1.userr.value
var email = formdata1.email.value
var password1 = formdata1.password1.value
var password2 = formdata1.password2.value
haveAlerted = false

if (username1.length < 6 || username1.length > 15){
	if(haveAlerted == false){
		alert("Username must be between 6 and 15 characters")
		haveAlerted = true
	}
}

if (username1.charCodeAt(0) > 47 && username1.charCodeAt(0) < 58) {
	if (haveAlerted == false){
		alert("Username can't start with a number")
		haveAlerted = true
	}
}
for(i = 0; i < username1.length; i++){
		if (username1.charCodeAt(i) < 48 || username1.charCodeAt(i) > 57) {
			if (username1.charCodeAt(i) < 65 || username1.charCodeAt(i) > 90) {
				if (username1.charCodeAt(i)<97 || username1.charCodeAt(i) > 122){
					if (haveAlerted == false){
						alert("Username can only contain letters and digits")
						haveAlerted = true
					}
				}

			}
		}
	}
lookforat = false
for(i = 0; i < email.length; i++){
	if (email.charCodeAt(i) < 48 || email.charCodeAt(i) > 57) {
		if (email.charCodeAt(i) < 64 || email.charCodeAt(i) > 90) {
			if (email.charCodeAt(i)<97 || email.charCodeAt(i) > 122){
				if (haveAlerted == false && email.charCodeAt(i) != 46){
					alert("Please enter a valid email")
					haveAlerted = true
				}
			}
		}
	}
	if(email.charCodeAt(i) == 64){
		lookforat = true
	}
}
if(lookforat == false && haveAlerted == false){
	alert("Please enter a valid email")
	haveAlerted = true
}


if (password1.length != password2.length) {
	if (haveAlerted == false){
		alert("Password must be the same")
		haveAlerted = true
	}
}
digcount= 0
uppercount= 0
lowercount = 0

for(i = 0; i < password1.length; i++){

	if (password1.charCodeAt(i) != password2.charCodeAt(i)){
		if (haveAlerted == false){
			alert("Passwords must be the same")
			haveAlerted = true
		}
	}

	if (password1.charCodeAt(i) < 48 || password1.charCodeAt(i) > 57) {
		if (password1.charCodeAt(i) < 65 || password1.charCodeAt(i) > 90) {
			if (password1.charCodeAt(i)<97 || password1.charCodeAt(i) > 122){
				if (haveAlerted == false){
					alert("Password can only contain letters and digits")
					haveAlerted = true
				}
			}
		}
	}

	if (password1.charCodeAt(i)>47 && password1.charCodeAt(i) < 58){
		digcount += 1
	}
	else if(password1.charCodeAt(i) > 64 && password1.charCodeAt(i) < 91){
		uppercount+=1
		}
	else if(password1.charCodeAt(i) > 96 && password1.charCodeAt(i) < 123){
		lowercount+=1
		}
}
if (digcount == 0 || uppercount == 0 || lowercount == 0){
	if (haveAlerted == false){
		alert("Password must contain at least one lower case letter, one upper case letter, and one digit")
		haveAlerted = true
	}
}

if(haveAlerted == false){
	alert("Registration Validated")
}

}