//fonction--validation---de--notre--formulaire
function validation() {
	//
	var name = document.getElementById('myName').value;
	var username = document.getElementById('myUsername').value;
	var objet = document.getElementById('myObjet').value;
	var email = document.getElementById('myEmail').value;
	var message = document.getElementById('myMessage').value;

	var text;
// error---message-----red--------------------
	error_message.style.padding = "10px";
	error_message.style.color = "red";
//------------------------------------------------

// the condition Validation--------------------------------
	if (name.length < 2) {
		text = "Veuillez entrer un nom valide";
		error_message.innerHTML = text;
		return false;
	}
	if (username.length < 5) {
		text = "Veuillez entrer un nom d'utilisateur valide";
		error_message.innerHTML = text;
		return false;
	}
	if (email.indexOf("@")== -1 || email.length < 6) {
		text = "Veuillez entrer un email valide";
		error_message.innerHTML = text;
		return false;
	}
	if (objet.length < 5) {
		objet = "Veuillez entrer un objet valide";
		error_message.innerHTML = objet;
		return false;
	} 

	if (message.length < 20) {
		text = "Veuillez entrer plus de 19 caractères";
		error_message.innerHTML = text;
		return false;
	}
		alert("Formulaire envoyé avec succès !");
	 return true;
}
  