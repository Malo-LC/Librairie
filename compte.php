<?php
session_start();
if (isset($_SESSION['mail'])==NULL){
	$_SESSION['mail'] = $_POST['mail'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Votre Compte</title>
    <link rel="stylesheet" type="text/css" href="styleconnexion.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="icone.png">
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

    <h1>Connecté</h1>

		<div class="compte_oui">
    		<h1>Vos infos personnelles</h1>
    		<p><strong>Mail :</strong> <?php echo $_SESSION['mail']; ?> </p>
    		
    	</div>
    	<input type="button" name="deco" class="enregistrer" value="Deconnexion" onclick="location.href='deconnect.php'">
    <h2></h2>

<?php include("footer.php"); ?>
    
</body>
</html>