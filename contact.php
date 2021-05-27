<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Librairie</title>
	<link rel="icon" type="image/png" sizes="16x16" href="icone.png">
	<link rel="stylesheet" type="text/css" href="stylecontact.css">
	<meta name="viewport" content="width=device-width">
</head>
<body>
<?php include("entete.php"); ?>	


	<ul class="hotbar">
    <li class="toolbar" ><a href="Acceuil.php">Accueil</a></li>
    <li class="toolbar"><a href="Librairie.php">Librairie</a></li>
    <li class="toolbar"><a href="Presse.php">Papeterie</a></li>
    <li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>
    <h1>Librairie Saint-Nicolas</h1>
    <div class="infoprat">
    	<div class="heures">	

   			<h2>Heures d'ouverture</h2>
   			<div class="dates">
   			<p class="jours">Lundi :</p>
   			<p class="horaires">7:30-12:30 | 15:30-19:30</p>
   		</div>
   			<div class="dates">
   			<p class="jours">Mardi :</p>
   			<p class="horaires">7:30-12:30 | 15:30-19:30</p>
   		</div>
   			<div class="dates">
   			<p class="jours">Mercredi :</p>
   			<p class="horaires">7:30-12:30 | 15:30-19:30</p>
   		</div>
   			<div class="dates">
   			<p class="jours">Jeudi :</p>
   			<p class="horaires">7:30-12:30 | 15:30-19:30</p>
   		</div>
   			<div class="dates">
   			<p class="jours">Vendredi :</p>
   			<p class="horaires">7:30-12:30 | 15:30-19:30</p>
   		</div>
   			<div class="dates">
   			<p class="jours">Samedi :</p>
   			<p class="horaires">7:30-12:30 | 15:30-19:30</p>
   		</div>
   			<div class="dates">
   			<p class="jours">Dimanche :</p>
   			<p class="horaires">FERMÉ</p>
   		</div>
    	</div>

    	<div class="contact">
    		<h2>Contact</h2>
    		<div class="contact_case"> 
    			<img src="smartphone.png" class="logo_info"> <p class="tel">01 34 13 48 17</p>
    		</div>
    		<div class="contact_case"> 
    		<img src="mail.png" class="logo_info"> <p class="mail_info">postmaster@librairie-saint-nicolas.com</p>
    		</div>
    	</div>
</div>

	<h2>Carte</h2>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2617.590067763524!2d2.2378814158572253!3d48.99935809872438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66774ff0f9541%3A0x642019c9e568e36a!2sLibrairie%20Saint%20Nicolas!5e0!3m2!1sfr!2sfr!4v1622118346652!5m2!1sfr!2sfr"  style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	
	<h2>Adresse</h2>
	<div class="adresse">
		
		<p>Les Hauts de Saint-Nicolas</p>
		<p>95130 </p>
		<p>Le Plessis-Bouchard, France</p>
	</div>
</div>


<?php include("footer.php"); ?>



</body>
</html>