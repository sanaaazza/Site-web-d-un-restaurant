function toggleSousMenu(idSousMenu) {
    var sousMenu = document.getElementById(idSousMenu);
    sousMenu.style.display = (sousMenu.style.display === 'block') ? 'none' : 'block';

}
function redirigerVersPage() {
    // Remplacez "nouvelle_page.html" par le chemin de la page vers laquelle vous souhaitez rediriger
    window.location.href = "authentification.php"; }
   function verification(){
    if(document.getElementById("nom").value==""){
        alert("Veuillez entrer votre nom et prenom !"); 
          return false;}
        if((document.getElementById("personne").value=="")||(document.getElementById("personne").value<=0)){
            alert("Veuillez entrer un nombre des personnes  !");   return false;
        } var v=1;
        var taille=document.getElementById("num").value.length;
        
            for(var i=0;i<taille;i++){
           if(document.getElementById("num").value.charAt(i)<'0'|| taille!=10) v=(-1);
            }
            if(v==-1){alert("numéro de tél invalide!");return false;}
        
        if(document.getElementById("num").value=="")
        {
            alert("Veuillez enter un numéro de tél !");return false;
        }
        var dateactuelle=new Date();
        var dateutilisateur=new Date(document.getElementById("date").value)
        if(document.getElementById("date").value==""||dateutilisateur<dateactuelle ){
            alert("Veuillez entrer une date pertinente  !"); return false;
        }
        if(document.getElementById("time").value==""){
            alert("Veuillez entrer une heure   !"); return false;
        }
        if(document.getElementById("email").value==""){
            alert("Veuillez entrer un email   !"); return false;
        }
        if(document.getElementById("email").value.indexOf('@')==-1){
            alert("Adresse email que vous avez enter incorrecte   !"); return false;
        }
        if(document.getElementById("password").value==""){
            alert("Veuillez entrer un mot de passe!");return false ;
        }
        var pass=document.getElementById("password").value.length;
        if(pass<8){alert("Le nombre des caractères que vous avez entrer n'est pas suffisant!");return false;}
        
   }
   function contact(){
    if(document.getElementById("Nom").value==""){
        alert("Veuillez entrer votre nom complet!");return false;
    }
    if(document.getElementById("eml").value==""){
        alert("Veuillez entrer un email !"); return false ;
    }
    if(document.getElementById("eml").value.indexOf('@')==-1){
        alert("Votre email est invalide !"); return false ;
    }
    if(document.getElementById("message").value==""){
        alert("Enter votre message"); return false;
    }
    var tail=document.getElementById("message").value.length;
    if(tail<20){
        alert("Votre message n'est pas complet!"); return false ;
    }
   }
   function autentifier(){
    if(document.getElementById("email").value==""){
        alert("Veuillez entrer votre email!"); return false;
    }
    if(document.getElementById("email").value.indexOf('@')==-1){
        alert("Votre email est  invalide!");return false;
    }
    if(document.getElementById("modepasse").value==""){
        alert("Veuillez entrer votre mot de passe!"); return false;
    }
    var b=document.getElementById("modepasse").value.length;
    if(b<8){
        alert("Le nombre des caractères que vous avez entrer n'est pas suffisant!"); return false;

    }
   }