const conteneur = document.getElementById ('conteneur');
const loginButton = document.getElementById('login');
const signUpButton = document.getElementById('signUp');

 signUpButton.addEventListener('click', ()=>{
  conteneur.classList.add('panel-active');
 })

 loginButton.addEventListener('click', ()=>{
  conteneur.classList.remove('panel-active');
 })