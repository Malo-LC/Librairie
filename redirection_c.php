<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Redirection</title>
    <link rel="stylesheet" type="text/css" href="styleconnexion.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="icone.png">

</head>
<body>
	<?php include("entete.php"); ?>
	
		
		
	<ul class="hotbar">
		<li class="toolbar active" ><a href="Acceuil.php">Accueil</a></li>
		<li class="toolbar"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Presse.php">Papeterie</a></li>
		<li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>
	<h1>Ce mail n'est pas reconnu ou le mot de passe est faux, réessayez :</h1>

	<input type="button" name="deco" class="deconnexion" value="Réessayer" onclick="location.href='deconnect.php'">
    <h2></h2>


<?php include("footer.php"); ?>
</body>
</html>