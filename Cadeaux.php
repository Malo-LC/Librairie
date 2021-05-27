<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Librairie</title>
    <link rel="stylesheet" type="text/css" href="stylelibrairie.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="icone.png">
    <meta name="viewport" content="width=device-width">
    <LINK rel="stylesheet" type="text/css" href="carousel.css" media="screen" />
    <LINK rel="stylesheet" type="text/css" href="acceuil.css" media="screen" />

</head>



<body>
	<div id="tout_en_haut">
		
		<div><a href="Acceuil.php"><img height="120" style="margin-top: -15px" class="logo" src="logov2.png" alt="Logo Librairie"></a></div> 
		<div class="tools">
			<div class="liens"> <a href="Presse.php"> <img class="lien" alt="Panier" src="cart.png">  </a> <p>Panier</p></div>
			<div class="liens"> <a href="connexion.php"> <img class="lien" alt="Compte" src="compte.png"> </a><p>Compte</p> </div>
			<div class="liens"> <a href="contact.php"> <img class="lien" alt="Contact" src="contact.png"> </a> <p>Contact</p></div>
			<div class="liens" style="cursor: pointer;"> <a onclick="window.print()"> <img class="lien" alt="Imprimer" src="print.png"> </a> <p>Imprimer</p></div>


		</div>
	</div>

	<ul class="hotbar">
		<li class="toolbar active" ><a href="Acceuil.php">Accueil</a></li>
		<li class="toolbar"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Presse.php">Journaux</a></li>
		<li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>










<?php include("footer.php"); ?>


</body>
</html>