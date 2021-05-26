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

	
	
<div id="conteneur">
	<h3> Les dernières sorties </h3>
</div>
<div id="slider" style="z-index: 1">
	<ul id="contenu_slider" style="z-index: 1">
		<li><a href="livre<?php $ID=1; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID++; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel" alt="Livre" /></a></li>
		<li><a href="livre<?php $ID++; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel" alt="Livre" /></a></li>
		<li><a href="livre<?php $ID++; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel" alt="Livre" /></a></li>
		<li><a href="livre<?php $ID++; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel" alt="Livre" /></a></li>
		<li><a href="livre<?php $ID++; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel" alt="Livre" /></a></li>
		<li><a href="livre<?php $ID++; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel" alt="Livre" /></a></li>
		<li><a href="livre<?php $ID++; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel" alt="Livre" /></a></li>
		<li><a href="livre<?php $ID++; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel" alt="Livre" /></a></li>
	</ul>
</div>



 <div id="conteneur">
	<h3> Nouveautés jeunesse </h3>
</div>

<div id="slider" style="z-index: 1">
	<ul id="contenu_slider" style="z-index: 1">
		<li><a href="livre<?php $ID=16; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID=17; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID=22; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID=23; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID=1; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID++; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID++; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID++; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID++; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
</div>

	<div id="conteneur">
		<h3> Livres ayant reçu un prix en 2020 </h3>
	</div>

	<div id="slider" style="z-index: 1">
	<ul id="contenu_slider" style="z-index: 1">
		<li><a href="livre<?php $ID=18; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID=19; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID=20; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID=21; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID=1; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID=1; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID=1; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID=1; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
		<li><a href="livre<?php $ID=1; echo $ID;?>.php"><img src="<?php echo $livre[$ID][4];?>" class="livretab_carousel " alt="Livre" /></a></li>
	</ul>
</div>


<?php include("footer.php"); ?>


</body>
</html>