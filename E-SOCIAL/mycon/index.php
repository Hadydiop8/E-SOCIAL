<!DOCTYPE html>
<html>
<head>
  <title>Inscription</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
</head>
<body>
   <div class="conteneur" id="conteneur">  
     <div class="form-conteneur sign-up-conteneur">
        <form action="#">
            <h1>   Créer un compte</h1>
            <div class="social-conteneur">  
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>Utiliser un compte gmail</span>
            <input type="text" placeholder="Nom">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Mot de passe">
            <button>Créer le compte</button>
        </form>
     </div>

     <div class="form-conteneur login-conteneur">
      <form action="#">
          <h1>Se connecter</h1>
          <div class="social-conteneur">  
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-google-plus-g"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>je n'ai pas de compte</span>
          <input type="email" placeholder="Email">
          <input type="password" placeholder="Mot de passe">
          <button>Se connecter</button>
      </form>
   </div>
   <div class="overplay-conteneur">
    <div class="overplay">
      <!-- panel left -->
      <div class="overplay-panel overplay-left">
        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error id perferendis dolorum.</p>
        <button class="ghost" id="login">Se connecter</button>
      </div>
      <!-- panel left -->

      <!-- panel right -->
      <div class="overplay-panel overplay-right">
        <h1>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error id perferendis dolorum.</p>
        <button class="ghost" id="signUp">Créer un compte</button>
      </div>
      <!-- panel right -->
    </div>
   </div>
   </div>

  <script src="script.js"></script>

  
</body>
</html>

