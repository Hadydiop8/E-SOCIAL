<?php 

		include('HEADER_1/header.php');
     
?>
 <!DOCTYPE html>
<html>
<head>
  <title>Formulaire de don</title>
  <style type="text/css">
    body{
      background-image: url("../images/jeux.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
    }
    form {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 15px;
  background-color: #608d8d ;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="number"],
select,
textarea {
  width: 100%;
  padding: 8px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"],[type="button"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"],[type="button"]:hover {
  background-color: #45a049;
}

textarea {
  height: 100px;
}
h1{
  text-align: center;
  color: black;
  margin-top: 2rem;
  border-radius: 15px;
  background-color: #fff;
  margin-top: 15px;
  margin-left: 15%;
  margin-right: 15%;
}
marquee{
  margin-left: 20%;
  margin-right: 20%;
}
/* Ajoutez d'autres styles CSS selon vos besoins */


  </style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


   <link rel="stylesheet" type="text/css" href="HEADER_1/style.css">
    <link rel="stylesheet" type="text/css" href="FOOTER_1/style.css">
</head>


<body>
  
   <marquee>
    <h1>Formulaire de don || tout pour votre aide</h1>
  </marquee>

   <form action="traitement_inscription.php" method="post" id="formulaire">
  <label for="nom">Nom :</label>
  <input type="text" id="nom" name="nom" required>

  <label for="email">Adresse e-mail :</label>
  <input type="email" id="email" name="email" required>

  <label for="montant">Montant du don :</label>
  <input type="number" id="montant" name="montant" required>

  <label for="type_don">Type de don :</label>
  <select id="type_don" name="type_don" required>
    <option value="alimentaire">Dons alimentaires</option>
    <option value="vetement">Dons de vêtements</option>
    <option value="chaussure">Dons de chaussures</option>
    <option value="meuble">Dons de meubles</option>
    <option value="loisir">Dons de matériel de loisirs</option>
  </select>

  <label for="mode_paiement">Mode de paiement :</label>
  <select id="mode_paiement" name="mode_paiement" required>
    <option value="carte_credit">Carte de crédit</option>
    <option value="paypal">PayPal</option>
    <option value="virement">Virement bancaire</option>
  </select>

  <label for="commentaire">Commentaire :</label>
  <textarea id="commentaire" name="commentaire"></textarea>

  <input type="submit" value="Faire un don">
  <input type="button" value="Effacer" onclick="effacerFormulaire()" id="formulaire">

 </form>
<!--  <button onclick="afficherInformations()">Afficher les informations</button> -->
  <script>
        function effacerFormulaire() {
  // Réinitialiser les valeurs des champs du formulaire
        document.getElementById("formulaire").reset();
}
// FONCTION AFFICHE INFORMATION
function afficherInformations() {
  // Récupérer les valeurs des champs du formulaire
  var nom = document.getElementById("nom").value;
  var email = document.getElementById("email").value;
  var montant = document.getElementById("montant").value;
  var type_don = document.getElementById("type_don").value;
  var mode_paiement = document.getElementById("mode_paiement").value;
  var commentaire = document.getElementById("commentaire").value;
  
  // Afficher les informations dans une zone de texte ou dans une fenêtre modale
  var informations = "Nom: " + nom + "\n" +
                     "Adresse e-mail: " + email + "\n" +
                     "Montant du don: " + montant + "\n" +
                     "Type de don: " + type_don + "\n" +
                     "Mode de paiement: " + mode_paiement + "\n" +
                     "Commentaire: " + commentaire;
  
  // Exemple: Afficher les informations dans une zone de texte
  document.getElementById("informations").value = informations;
}
</script> 

<!-- <textarea id="informations" rows="25" readonly></textarea>
 -->
<?php 

		include('FOOTER_1/footer.php');

?>

</body>
</html>
