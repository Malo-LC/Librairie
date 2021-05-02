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

</head>


<body>
	<?php include("entete.php"); ?>
	
		
		
	<ul class="hotbar">
		<li class="toolbar" ><a href="Acceuil.php">Accueil</a></li>
		<li class="toolbar"><a href="Presse.php">Presse</a></li>
		<li class="toolbar active"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Carterie.php">Carterie</a></li>
		<li class="toolbar"><a href="Papeterie.php">Papeterie</a></li>
		<li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>

    <!-- <div style="margin-left: 10px">
    <p>Petit formulaire en bal?</p>
    <form>
    	<label for="fname">First name:</label><br>
    	<input type="text" id="fname" name="fname"><br>
    	<label for="lname">Last name:</label><br>
    	<input type="text" id="lname" name="lname"><br>
    	<br>
    	<input type="submit" value="Submit">
	</form>
	</div> -->




	<!-- <p id="demo"> Test</p>
	<button type="button" onclick="myfonction()">appuyer</button>
	<button type="button" onclick="fonctionalerte()">alerte</button>
	<button onclick="window.print()">Print this page</button>
	<script type="text/javascript" src="myscript.js"></script> -->


	


	<div id="vitrine">
		<div class="presentoir">
		<div class="couverure"><img src="livre.jpg" alt="Livre" class="livretab"></div>
		<p>9.99€</p>	<img class="ajout_panier" alt="Panier" src="cart.png">
		</div>
		<div class="presentoir">
		<div class="couverure"><img src="livre.jpg" alt="Livre" class="livretab"></div>
		<p>9.99€</p>	<img class="ajout_panier" alt="Panier" src="cart.png">
		</div>
				<div class="presentoir">
		<div class="couverure"><img src="livre.jpg" alt="Livre" class="livretab"></div>
		<p>9.99€</p>	<img class="ajout_panier" alt="Panier" src="cart.png">
		</div>
				<div class="presentoir">
		<div class="couverure"><img src="livre.jpg" alt="Livre" class="livretab"></div>
		<p>9.99€</p>	<img class="ajout_panier" alt="Panier" src="cart.png">
		</div>
				<div class="presentoir">
		<div class="couverure"><img src="livre.jpg" alt="Livre" class="livretab"></div>
		<p>9.99€</p>	<img class="ajout_panier" alt="Panier" src="cart.png">
		</div>
	</div>

<div id="conteneur">
	<p> JE SUIS SUR LA PAGE LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<p> JE SUIS SUR LA PAGE LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<p> JE SUIS SUR LA PAGE LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<p> JE SUIS SUR LA PAGE LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<p> JE SUIS SUR LA PAGE LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<p> JE SUIS SUR LA PAGE LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<p> JE SUIS SUR LA PAGE LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<p> JE SUIS SUR LA PAGE LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<p> JE SUIS SUR LA PAGE LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
</div>



<?php include("footer.php"); ?>

</body>
</html>