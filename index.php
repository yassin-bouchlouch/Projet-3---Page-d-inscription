<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="main.css">

   <style>
         .error {color: #FF0000;}
   </style>

</head>
<body>
   

   
  

<div class="container" id="container">
	<div class="form-container  form-container sign-in-container">
		<form action="affichage.php" target="_blank" method="get">
		<h1 class="inscription" >Inscription</h1> 
			<span class=message>Veuillez remplir le formulaire d'inscription</span>
			<input type="text" placeholder="Prénom" name="prenom"/>
			<input type="text" placeholder="Nom" name="nom" />
			<input type="email" placeholder="Email" name="email" />
			<input type="number" placeholder="Tel" name="numero" />
			<button class="btn1" >Submit</button>
		</form>
	</div>
	
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Bonjour</h1>
				<p>Entrez vos informations personnelles et commencez votre voyage avec nous pour recevoir votre certificat.</p>
				<button class="ghost" id="signUp">Imprimer</button>
			</div>
		</div>
	</div>
</div>


      
   <script src="app.js"></script>

</body>
</html>