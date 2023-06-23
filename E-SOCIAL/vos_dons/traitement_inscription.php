
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


   <link rel="stylesheet" type="text/css" href="HEADER_1/style.css">
    <link rel="stylesheet" type="text/css" href="FOOTER_1/style.css">
 <style type="text/css">
   body{
    background-color: rgb(235, 238, 243);
   }
   .message{
     margin: 15px;
     color: teal;
     font-size: 35px;
   }

 </style>
  <title></title>
  
</head>
<body>

   <?php
 
    include('HEADER_1/header.php');
  ?>
<div class="message">
  <?php
  echo "<br>";
  echo "Don enregistré avec succès";
   ?>
</div>


<?php
  echo "<br>";
  echo "<br>";
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$montant = $_POST['montant'];
$typeDon = $_POST['type_don'];
$modePaiement = $_POST['mode_paiement'];
$commentaire = $_POST['commentaire'];






// Afficher les informations dans un tableau
echo '<table style="border-collapse: collapse; width: 100%; text-align:center;">';
echo '<tr><th style="padding: 10px; text-align:center; border: 1px solid #ccc;">Nom</th> <th style="padding: 10px; text-align:center; border: 1px solid #ccc;">Email</th><th style="padding: 10px; text-align:center; border: 1px solid #ccc;">Montant</th><th style="padding: 10px; text-align:center; border: 1px solid #ccc;">Type de don</th><th style="padding: 10px; text-align:center; border: 1px solid #ccc;">Mode de paiement</th><th style="padding: 10px; border: 1px solid #ccc;">Commentaire</th></tr>';

echo '<tr><td border: 1px solid #ccc;>'.$nom.'</td><td border: 1px solid #ccc;>'.$email.'</td><td border: 1px solid #ccc;>'.$montant.'</td><td border: 1px solid #ccc;>'.$typeDon.'</td><td border: 1px solid #ccc;>'.$modePaiement.'</td><td border: 1px solid #ccc;>'.$commentaire.'</td></tr>';
echo '</table>';
 

 echo "<br>";
  echo "<br>";
   echo "<br>";
   echo "<br>";
   echo "<br>";
   
    include('FOOTER_1/footer.php');

?>
</body>
</html>