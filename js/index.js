function Toggle(arg1) {

switch(arg1){
    case 'pass':
      var x = document.getElementById("pass");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
      break;
    case 'passConfirme':
      var x = document.getElementById("passConfirme");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
      break;

      default:
  }
} //fin function

function confirmPassword(){
  let x=document.forms.myform.password.value;
  let y=document.forms.myform.passConfirme.value;
      if (x != y) {
        window.confirm("Les mots de passe doivent etre identiques"); 
      return false;
      }   
}//fin function

function PasswordVerify(){

// Alternative syntax using RegExp constructor
//const regex = /(?=.{10,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*/;

const regex = new RegExp('(?=.{10,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\\W).*', 'g')
const str = document.forms.myform.password.value;
let m;

      if ((m = regex.exec(str)) !== null) {
        document.querySelector("#pass").style.backgroundColor = "green" ;
        document.getElementById("passConfirme").disabled = false;
      }
      else {
        window.alert("Un mot de passe dois contenir au moins \n 1 majuscule,1 miniscule, 1 chiffre, 1 caractère spécial \n et dois avoir une longueur d'au moins 10 caracteres");
        document.querySelector("#pass").style.backgroundColor = "red";
        document.getElementById("passConfirme").disabled = true;
        
           }
  }//fin if

function ChargeRendezvous(){

//On instancie l'objet de requette
let xhr = new XMLHttpRequest();
let email = document.getElementById("email").value;

//console.log(email);
//passage de paramettre a PHP
// window.location.href = "../modele/traitementModifierSelectRDV.php?var1=" + email;

//on traitera ensuite la reponse du serveur dans la fonction() qui suit
xhr.onreadystatechange = function() {
  //console.log(this);
  // readyState = 4 & status = 200: requette terminée et réponse disponible

if(this.readyState == 4 && this.status == 200){

        let j = 0;
        let result = ""; //vide
        let number = 0;
        let count = this.responseText.length;

        //comptage des "/" qui est egal au nombre de RDV de la personne
        for(var k=0;k<count + 1;k++){
          if(this.responseText[k] == "/"){
            number++;
          }
        }//fin for

        for(var i =0; i<number;i++){

           //creation d'un element HTML pour l'element HTML select
           let new_elt = document.createElement("option");
           document.getElementById('AncienneDate').appendChild(new_elt);

            while (this.responseText[j] != "/"){ 
              result = result + this.responseText[j];
              j++;
            }
        j++;
   
        //console.log(result);
        //option est rempli avec la reponse de la requette AJAX
        new_elt.innerHTML = result;
        result = ""; //vide
      }//fin for
  }//fin if
  else 
   {
    if(this.readyState == 4 && this.status == 404){
      alert("ressource not found error:404 !")
    }
  }//fin else
};//fin fonction onreadystatechange()

//On cré une requette
/* 1:methode GET;2:le fichier sur lequel on execute la requette;3:asynchrone false or true
*/
//différence entre GET et POST: Get lorsque qu'on veut récupérer du contenu et POST lorsqu'
//on veut envoyer du contenu
//creation de la requette avec passage d'un argument
xhr.open('GET','../modele/traitementModifierSelectRDV.php?var1=' + email,true);
//console.log(fichier);
//indique que la réponse est du texte(sinon on peut avoir une erreur de parse)
xhr.responseType = "text";
//indique que la réponse est du JSON(sinon on peut avoir une erreur de parse)
//xhr.responseType = "json";
//xhr.responseType = "xml";
//envoie de la requette au serveur puis la reponse sera traitée par la fonction() précédente
xhr.send();

}//fin fonction chargeRendezVous()







  






