<?php 

		include('HEADER_1/header.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<style type="text/css">
		 .mybody{
		 	background: #f6f5f7;
    flex-direction: column;
    font-family: 'Montserrat';
    height: 100vh;
		 }
		 .conteneur{
   position: relative;
   overflow: hidden;
   min-height: 600px;
   width: 1000px;
   max-width: 100%;
   margin-left: 20%;
   background-color: #fff;
   border-radius: 15px;
   box-shadow: 0 8px 24px rgba(0, 32, 63, 45),  
   0 8px 8px rgba(0, 32, 63, 45);

 }

.form-conteneur{
   position: absolute;
   top: 0;
   height: 100%;
   transform: transform .6s ease-in-out;
}
.sign-up-conteneur{
   left: 0;
   width: 50%;
   opacity: 0;
   z-index: 1;
}
.conteneur.panel-active .sign-up-conteneur{
   transform: translateX(100%);
   opacity: 1;
   z-index: 5;
   animation: show .6s
}
@keyframes show{
   0%, 49.99%{
      opacity: 0;
      z-index: 1;
   }
   50%, 100%{
      opacity: 1;
      z-index: 5;
   }
}
.conteneur.panel-active .login-conteneur{
   transform: translateX(100%);
}
.login-conteneur{
   left: 0;
   width: 50%;
   z-index: 2;
}
form{
   background-color: #fff;
   display: flex;
   align-items: center;
   justify-content: center;
   flex-direction: column;
   padding: 0 50px;
   height: 100%;
   text-align: center;
}
input{
   background-color: #adf0d1;
   border: none;
   padding: 12px 15px;
   margin: 8px 0; 
   width: 100%;
}
button.ghost{
   background-color: transparent;
}
button{
   background-color: #adf0d1;
   color: #00203f;
   border: px solid #adf0d1;
   font-size: 16px;
   font-weight: bold;
   padding: 16px 32px;
   margin-top: 24px;
   letter-spacing: 1px;
   border-radius: 50px;
   border-color: rgba(0, 32, 63, 45);
   transition: .2s ease-in;
}
button:hover{
   cursor: pointer;
   background-color: #00203f;
   color: #adf0d1;
}
button:active{
   transform: scale(.95);
}
.social-conteneur{
   margin: 24px 0;
}
.social-conteneur a{
   display: inline-flex;
   align-items: center;
   justify-content: center;
   margin: 0 4px;
   height: 40px;
   width: 40px;
   border-radius: 50%;
   background-color: #adf0d1;
   border: 1px solid rgba(0, 32, 63, 45);
}
/* h1{
   margin: 10px;
   font-size: 24px;
   text-align: center;
}*/
 
.trait{
   background: teal;
   width: 50rem;
   margin: auto;
   height: 0.5rem;
   border-radius: 5px;
   margin-bottom: 25px;
}
span{
   font-size: 14px;
}
a{
   text-decoration: none;
   font-size: 14px;
   margin: 8px 0 16px;
   color: #333;
}

.overplay-conteneur{
   position: absolute;
   top: 0;
   left: 50%;
   width: 50%;
   height: 100%;
   overflow: hidden;
   z-index: 100;
   transform: transform .6s ease-in-out;
}
.conteneur.panel-active .overplay-conteneur{
   transform: translateX(-100%);
}
.overplay{
   background: lin ear-gradient(to right, #adf0d1, #e7fefd);
   background: #adf0d1;
   color: #00203f;
   position: relative;
   left: -100%;
   height: 100%;
   width: 200%;
   transform: translateX(0);
   transform: transform .6s ease-in-out;
}
.conteneur.panel-active .overplay{
   transform: translateX(50%);
}
.overplay-panel{
   position: absolute;
   display: flex;
   align-items: center;
   justify-content: center;
   flex-direction: column;
   padding: 0 40px;
   text-align: center;
   top: 0;
   height: 100%;
   width: 50%;
   transform: translateX(0);
   transform: transform .6s ease-in-out;
}
.overplay-left{
   transform: translateX(-20%);
}

.conteneur.panel-active .overplay-left{
   transform: translateX(0);
}
.overplay-right{
   right: 0;
   transform: translateX(0%);
}

.conteneur.panel-active .overplay-right{
   transform: translateX(20%);
}
p{
   font-size: 14px;
   font-weight: 100;
   line-height: 20px;
   letter-spacing: .5px;
   margin: 20px 0 30px;
}
	</style>

	<link rel="stylesheet" type="text/css" href="HEADER_1/style.css">
	<link rel="stylesheet" type="text/css" href="FOOTER_1/style.css">
	<title>Page de connexion</title>

 </head>
 <body>

 	 <div class="mybody">
      <h1 style="text-align: center;">S'identifie</h1>

<div class="trait"></div>
   <div class="conteneur" id="conteneur">  
     <div class="form-conteneur sign-up-conteneur">
        <form action="#">
            <h1 class="h1">   Créer un compte</h1>
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
   <script>
   		const conteneur = document.getElementById ('conteneur');
        const loginButton = document.getElementById('login');
        const signUpButton = document.getElementById('signUp');

 signUpButton.addEventListener('click', ()=>{
  conteneur.classList.add('panel-active');
 })

 loginButton.addEventListener('click', ()=>{
  conteneur.classList.remove('panel-active');
 })
   </script>

   </div>
</body>










 <?php 

		include('FOOTER_1/footer.php');

 ?>
 
 </body>
 </html>