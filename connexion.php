<?php
session_start();
if(isset($_SESSION['mail'])==TRUE){
	header('Location: compte.php');
}
echo $_SESSION['mail'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Librairie</title>
	<link rel="icon" type="image/png" sizes="16x16" href="icone.png">
	<link rel="stylesheet" type="text/css" href="styleconnexion.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>
 	<?php include("entete.php"); ?>	

	<ul class="hotbar">
		<li class="toolbar" ><a href="Acceuil.php">Accueil</a></li>
		<li class="toolbar"><a href="Presse.php">Presse</a></li>
		<li class="toolbar"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Carterie.php">Carterie</a></li>
		<li class="toolbar"><a href="Papeterie.php">Papeterie</a></li>
		<li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>

    <div class="compte_oui_non">
    	<div class="compte_oui">
    		<h1>Vous avez déja votre compte?</h1>
    		<form class="form_oui" method="post" action="compte_c.php">
		    	<label for="email">Email:</label>
		    	<input type="email" id="email" class="champ_oui" name="mail-connect" required>
		    	<label for="lname">Mot de passe:</label>
		    	<input type="password" id="mdp" class="champ_oui" name="mot-de-passe-connect" required>
		    	<input type="submit" value="Connexion" class="connexion">
    		</form>
    	</div>
    	<div class="compte_oui">
    		<h1>Créez votre compte</h1>
    		<form class="form_oui" method="post" action="compte.php"> 
    			<label for="nom">Nom</label>
		    	<input type="text" id="nom" class="champ" name="nom" required>
		    	<label for="prenom">Prenom</label>
		    	<input type="text" id="prenom" class="champ" name="prenom" required>
    			<label for="emailnouveau">Email</label>
		    	<input type="email" id="emailnouveau" class="champ" name="mail" required>
		    	<label for="mdpnouveau">Mot de passe</label>
		    	<input type="password" id="mdpnouveau" class="champ" name="mot_de_passe" required>
		    	<input type="submit" value="Créer" class="enregistrer">
    		</form>
    		
    	</div>
    </div>

<?php include("footer.php"); ?>

</body>
</html>