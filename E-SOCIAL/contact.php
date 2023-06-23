
<?php 

		include('HEADER_1/header.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="HEADER_1/style.css">
	<link rel="stylesheet" type="text/css" href="FOOTER_1/style.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
	<title>ContaCT</title>
</head>
<body>
<div class="flex">
<div class="wrapper">
	<h2>Contactez-nous</h2>
	<div id="error_message"></div>

	<!--	<p id="demo"></p>  -->

<form id="myForm" onsubmit="return validation();">
	<div class="input_field">
		<input type="text" placeholder="Name" id="myName">
	</div>	

	<div class="input_field">
		<input type="text" placeholder="username" id="myUsername">
	</div>	

	<div class="input_field">
		<input type="text" placeholder="email" id="myEmail">
	</div>	
 

	<div class="input_field">
		<input type="text" placeholder="objet" id="myObjet">
	</div>	

	<div class="input_field">
		<textarea  type="text" placeholder="message" id="myMessage"></textarea>
	</div>	

	<div class="btn">
		<input type="submit" placeholder="Name" id="mySubmit">
	</div>	
</form>	

</div>

	
    <div class="notreCarte"><div><marquee>Vous pouvez nous localiser sur la carte</marquee></div>
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122715.94864896232!2d-16.54087334027941!3d16.020104771535856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe955655141ee805%3A0xe91d1d12f36a7e64!2sSaint-Louis!5e0!3m2!1sfr!2ssn!4v1687090897101!5m2!1sfr!2ssn" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</div>































<?php 

		include('FOOTER_1/footer.php');

?>








<!--
		<button id="button">Charger</button> 

<form  action="" method="post" name="formulaire" id="monFormulaire">
	<label for="nom">Votre Nom</label><br>
	<input type="text" name="nom" id="nom"><br>

	<label for="nom">Votre Prénom</label><br>
	<input type="text" name="prenom" id="prenom"><br>

	 <label for="sexe">Sexe : </label>
	 <select name="sexe" id="sexe">
	 	<option>Choississez</option>
	 	<option value="h">Homme</option>
	 	<option value="f">Femme</option>
	 </select><br>

	 <input type="checkbox" name="loisir" value="javascript">Le javascript</br>
	 <input type="checkbox" name="loisir" value="La couture">La couture</br>
	 <input type="checkbox" name="loisir" value="cinéma">Le cinément</br>
	 <input type="checkbox" name="loisir" value="foot-ball">Le foot-ball</br>
	 <input type="checkbox" name="loisir" value="baskett-ball">Le basket</br>
	 <input type="checkbox" name="loisir" value="Lecture">Lecture</br>
</form>


-->
		

		<script src="contact.js"></script> 
</body>
</html>