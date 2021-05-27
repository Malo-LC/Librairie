<?php
session_start();

?>

<?php $path = $_SERVER['PHP_SELF'];
$file = basename ($path);

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=librairie;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM journaux');
$donnees = $reponse->fetch();




do{
	$nom = "magazine";
	$nom .= $donnees['ID'];
	$nom .= ".php";
	if($nom==$file){
		$id=$donnees['ID'];
		$titre=$donnees['titre'];
		
		$photo=$donnees['photo'];
		$resume=$donnees['resume'];
		break;
	}
}
while($donnees = $reponse->fetch());


$id1=mt_rand(1, 5);
$id2=mt_rand(6, 10);
$id3=mt_rand(11, 14);

$reponse2 = $bdd->query('SELECT * FROM journaux');
$donnees2 = $reponse2->fetch();
$i=1;
$journaux = array_fill(1,3,array_fill(1,5,1));
do{
	if($donnees2['ID']==$id1){
		$journaux[1][1]=$i;
		$journaux[1][2]=$donnees2['titre'];
		
		$journaux[1][4]=$donnees2['photo'];
	}
	if($donnees2['ID']==$id2){
		$journaux[2][1]=$i;
		$journaux[2][2]=$donnees2['titre'];
		
		$journaux[2][4]=$donnees2['photo'];
	}
	if($donnees2['ID']==$id3){
		$journaux[3][1]=$i;
		$journaux[3][2]=$donnees2['titre'];
		
		$journaux[3][4]=$donnees2['photo'];
	}
	$i++;
} while($donnees2 = $reponse2->fetch());


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title><?php echo $titre ?></title>
    <link rel="stylesheet" type="text/css" href="stylelibrairie.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="icone.png">
    <LINK rel="stylesheet" type="text/css" href="livre.css" media="screen" />

</head>


<body>

	<?php include("entete.php"); ?>

	<ul class="hotbar">
		<li class="toolbar" ><a href="Acceuil.php">Accueil</a></li>
		<li class="toolbar"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Presse.php">Journaux</a></li>

		<li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>
		
	

	  <div class="vitrine_livre">
    <div class="presentoir_livre">
    <div class="couverure_livre"><a href="<?php echo $photo ?>" target="_blank"><img src="<?php echo $photo;?>" alt="couverture" class="livretab_livre"></a></div>
    <div class="flex_livre">
      <p><strong>Titre :</strong> <?php echo $titre;  ?></p>
      
      <p><strong>Résumé :</strong> <?php  echo $resume;  ?></p>
      

    </div>
    </div>
    
  </div>

<h1>Regardez aussi</h1>

<div class="conteneur_random">
		<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=1; echo $journaux[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $journaux[$ID][1];?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p><?php echo $journaux[$ID][2];?></p></div>
			</div>
		<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=2; echo $journaux[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php echo $journaux[$ID][1];?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p><?php echo $journaux[$ID][2];?></p></div>
			</div>
			<div class="presentoir_carousel">
				<div class="couverure">
					<img src="<?php $ID=3; echo $journaux[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php echo $journaux[$ID][1];?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p><?php echo $journaux[$ID][2];?></p></div>
			</div>
</div>
	







<?php include("footer.php"); ?>


</body>
</html>