function getFormations(){
  
    var Nom = document.getElementById("Nom").value;
     document.getElementById("affiche").innerHTML += "<b id=op>Nom:</b>&nbsp;" + Nom + "<br>";
  
    var Prenom = document.getElementById("Prenom").value;
     document.getElementById("affiche").innerHTML += "<b id=op>Prenom:</b>&nbsp;" + Prenom + "<br>";
  
    var Tel = document.getElementById("Tel").value;
     document.getElementById("affiche").innerHTML += "<b id=op>Tel:</b>&nbsp;" + Tel + "<br>";
  
    var Email = document.getElementById("Email").value;
     document.getElementById("affiche").innerHTML += "<b id=op>Email:</b>&nbsp;" + Email + "<br><br>";
   
  
  }
  