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


do{
	if($donnees['ID']==1){
		$id=$donnees['ID'];
		$titre1=$donnees['titre'];
		$auteur1=$donnees['auteur'];
		$photo1=$donnees['photo'];
		$resume1=$donnees['synopsis'];

	}
	if($donnees['ID']==2){
		$titre2=$donnees['titre'];
		$auteur2=$donnees['auteur'];
		$photo2=$donnees['photo'];
		$resume2=$donnees['synopsis'];
	}
	if($donnees['ID']==3){
		$titre3=$donnees['titre'];
		$auteur3=$donnees['auteur'];
		$photo3=$donnees['photo'];
		$resume3=$donnees['synopsis'];
	}
	if($donnees['ID']==4){
		$titre4=$donnees['titre'];
		$auteur4=$donnees['auteur'];
		$photo4=$donnees['photo'];
		$resume4=$donnees['synopsis'];
	}
	if($donnees['ID']==16){
		$titre16=$donnees['titre'];
		$auteur16=$donnees['auteur'];
		$photo16=$donnees['photo'];
		$resume16=$donnees['synopsis'];
	}
	if($donnees['ID']==17){
		$titre17=$donnees['titre'];
		$auteur17=$donnees['auteur'];
		$photo17=$donnees['photo'];
		$resume17=$donnees['synopsis'];
	}
	if($donnees['ID']==18){
		$titre18=$donnees['titre'];
		$auteur18=$donnees['auteur'];
		$photo18=$donnees['photo'];
		$resume18=$donnees['synopsis'];
	}
	if($donnees['ID']==19){
		$titre19=$donnees['titre'];
		$auteur19=$donnees['auteur'];
		$photo19=$donnees['photo'];
		$resume19=$donnees['synopsis'];
	}
	if($donnees['ID']==20){
		$titre20=$donnees['titre'];
		$auteur20=$donnees['auteur'];
		$photo20=$donnees['photo'];
		$resume18=$donnees['synopsis'];
	}
	if($donnees['ID']==21){
		$titre21=$donnees['titre'];
		$auteur21=$donnees['auteur'];
		$photo21=$donnees['photo'];
		$resume21=$donnees['synopsis'];
	}
	if($donnees['ID']==22){
		$titre22=$donnees['titre'];
		$auteur22=$donnees['auteur'];
		$photo22=$donnees['photo'];
		$resume22=$donnees['synopsis'];
	}
	if($donnees['ID']==23){
		$titre23=$donnees['titre'];
		$auteur23=$donnees['auteur'];
		$photo23=$donnees['photo'];
		$resume23=$donnees['synopsis'];
	}
}
while($donnees = $reponse->fetch());

?>

	
	
<div id="conteneur">
	<h3> Les dernières sorties </h3>
	</div>
	<div id="vitrine">
		<div class="presentoir">
		<div class="couverure"><a href="livre<?php echo $photo1;?>.php"><img src="<?php echo $photo1;?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php  echo $auteur1; ?></p><p><?php echo $titre1; ?></p></div>
		</div>
		<div class="presentoir">
		<div class="couverure"><a href="Cadeaux.php"><img src="<?php echo $photo2;?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php  echo $auteur2; ?></p><p><?php echo $titre2; ?></p></div>
		</div>
		<div class="presentoir">
		<div class="couverure"><a href="Cadeaux.php"><img src="<?php echo $photo3;?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php  echo $auteur3; ?></p><p><?php echo $titre3; ?></p></div>
		</div>
	</div>


	


		<div id="conteneur">
	<h3> Nouveautés jeunesse </h3>
	</div>
	<div id="vitrine">
		<div class="presentoir">
		<div class="couverure"><a href="livre<?php echo $photo16;?>.php"><img src="<?php echo $photo16;?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php  echo $auteur16; ?></p><p><?php echo $titre16; ?></p></div>
		</div>
		<div class="presentoir">
		<div class="couverure"><a href="livre<?php echo $photo17;?>.php"><img src="<?php echo $photo17;?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php  echo $auteur17; ?></p><p><?php echo $titre17; ?></p></div>
		</div>
		<div class="presentoir">
		<div class="couverure"><a href="livre<?php echo $photo22;?>.php"><img src="<?php echo $photo22;?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php  echo $auteur22; ?></p><p><?php echo $titre22; ?></p></div>
		</div>
		<div class="presentoir">
		<div class="couverure"><a href="livre<?php echo $photo23;?>.php"><img src="<?php echo $photo23;?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php  echo $auteur23; ?></p><p><?php echo $titre23; ?></p></div>
		</div>
		
		<br>

	<div id="conteneur">
	<h3> Livres ayant reçu un prix en 2020 </h3>
	</div>
	<div id="vitrine">
		<div class="presentoir">
		<div class="couverure"><a href="livre<?php echo $photo18;?>.php"><img src="<?php echo $photo18;?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php  echo $auteur18; ?></p><p><?php echo $titre18; ?></p></div>
		</div>
		<div class="presentoir">
		<div class="couverure"><a href="livre<?php echo $photo19;?>.php"><img src="<?php echo $photo19;?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php  echo $auteur19; ?></p><p><?php echo $titre19; ?></p></div>
		</div>
		<div class="presentoir">
		<div class="couverure"><a href="livre<?php echo $photo20;?>.php"><img src="<?php echo $photo20;?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php  echo $auteur20; ?></p><p><?php echo $titre20; ?></p></div>
		</div>
		<div class="presentoir">
		<div class="couverure"><a href="livre<?php echo $photo21;?>.php"><img src="<?php echo $photo21;?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php  echo $auteur21; ?></p><p><?php echo $titre21; ?></p></div>
		</div>


		

<?php include("footer.php"); ?>


</body>
</html>