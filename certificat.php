
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

      @font-face {
        font-family: jarvitts;
        src: url(Jarvitts.otf);
      }
    body{
      background-image: url(/Untitled-1.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      height: 100vh;
      
      
    }

    h1{
      font-family: 'Jarvitts';
      text-align: center;
      margin: 70vh;
      font-size: 10rem;
      font-weight: 100;
    }
  </style>
</head>
<body>

<?
// Initialisation du tableau des participants
 $nom = [];
 $prenom = [];

 
 // Ajouter le nom du nom dans le tableau
 $nom[] = $_GET["nom"] ;
 $prenom[] = $_GET["prenom"] ;


  echo "<h1>".$nom+$prenom."</h1>";
?>
  <script>


  </script>
</body>
</html>