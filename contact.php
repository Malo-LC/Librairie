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
		<li class="toolbar"><a href="Presse.php">Presse</a></li>
		<li class="toolbar"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Carterie.php">Carterie</a></li>
		<li class="toolbar"><a href="Papeterie.php">Papeterie</a></li>
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
<div class="carte">
	<h2>Carte</h2>
	<div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
		<div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3">
		</div>
	</div>
	<div class="adresse">
		<h2>Adresse</h2>
		<p>Les Hauts de Saint-Nicolas</p>
		<p>95130 </p>
		<p>Le Plessis-Bouchard, France</p>
	</div>
</div>


<?php include("footer.php"); ?>


<script>
	(function () {
        var setting = {"height":550,"width":1300,"zoom":16,"queryString":"Librairie Saint Nicolas, Les Hauts de Saint-Nicolas, 95130 Le Plessis-Bouchard, France","place_id":"ChIJQZUP_3Rn5kcRauNo5ckZIGQ","satellite":false,"centerCoord":[48.99944951826786,2.2400360999999958],"cid":"0x642019c9e568e36a","lang":"fr","cityUrl":"/france/paris","cityAnchorText":"Carte de Paris, Ile de France, France","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"459859"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=459859';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();
  </script>
</body>
</html>