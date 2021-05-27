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
	<?php include("entete.php"); ?>	
	<ul class="hotbar">
		<li class="toolbar active" ><a href="Acceuil.php">Accueil</a></li>
		<li class="toolbar"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Presse.php">Papeterie</a></li>
		<li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>

<?php 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=librairie;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM livres');
$donnees = $reponse->fetch();
$reponse1 = $bdd->query('SELECT * FROM livres');
$donnees1 = $reponse1->fetch();

$i=1;
$nb_id=0;
do{
	$nb_id++;
} while($donnees1 = $reponse1->fetch());

$livre = array_fill(1,$nb_id,array_fill(1,5,0));

do{
	if($donnees['ID']==$i){
		$livre[$i][1]=$i;
		$livre[$i][2]=$donnees['titre'];
		$livre[$i][3]=$donnees['auteur'];
		$livre[$i][4]=$donnees['photo'];
		$livre[$i][5]=$donnees['synopsis'];
	}
	$i++;
} while($donnees = $reponse->fetch());

?>
<div class="bg">
	<div class="caption">
    		<span class="border">LIBRAIRIE</span>
    		<br><br>
   	 	<span class="border">SAINT NICOLAS</span>
  	</div>
</div>
	



	<h2> Les nouveautés sur le site </h2>
<div class="conteneur_slider">
<div id="slider" style="z-index: 1">
	<ul id="contenu_slider" style="z-index: 1">
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=1; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
	</ul>
</div>
</div>


 
	<h2> Nouveautés jeunesse </h2>
<div class="conteneur_slider">
<div id="slider" style="z-index: 1">
	<ul id="contenu_slider" style="z-index: 1">
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=16; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=17; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=22; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=23; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=1; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
	</ul>
</div>
</div>
	
		<h2> Livres ayant reçu un prix en 2020 </h2>

<div class="conteneur_slider">
	<div id="slider" style="z-index: 1">
	<ul id="contenu_slider" style="z-index: 1">
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=18; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=19; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=20; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=21; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=10; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li >
        	<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>

	</ul>
</div>
</div>

<?php include("footer.php"); ?>


</body>
</html>