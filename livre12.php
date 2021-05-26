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
$reponse = $bdd->query('SELECT * FROM livres');
$donnees = $reponse->fetch();



do{
	$nom = "livre";
	$nom .= $donnees['ID'];
	$nom .= ".php";
	if($nom==$file){
		$id=$donnees['ID'];
		$titre=$donnees['titre'];
		$auteur=$donnees['auteur'];
		$photo=$donnees['photo'];
		$resume=$donnees['synopsis'];
		break;
	}
}
while($donnees = $reponse->fetch());
$id1=mt_rand(1, 8);
$id2=mt_rand(9, 15);
$id3=mt_rand(16, 22);

$reponse2 = $bdd->query('SELECT * FROM livres');
$donnees2 = $reponse2->fetch();
$i=1;
$livre = array_fill(1,3,array_fill(1,5,1));
do{
	if($donnees2['ID']==$id1){
		$livre[1][1]=$i;
		$livre[1][2]=$donnees2['titre'];
		$livre[1][3]=$donnees2['auteur'];
		$livre[1][4]=$donnees2['photo'];
	}
	if($donnees2['ID']==$id2){
		$livre[2][1]=$i;
		$livre[2][2]=$donnees2['titre'];
		$livre[2][3]=$donnees2['auteur'];
		$livre[2][4]=$donnees2['photo'];
	}
	if($donnees2['ID']==$id3){
		$livre[3][1]=$i;
		$livre[3][2]=$donnees2['titre'];
		$livre[3][3]=$donnees2['auteur'];
		$livre[3][4]=$donnees2['photo'];
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
		<li class="toolbar active" ><a href="Acceuil.php">Accueil</a></li>
		<li class="toolbar"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Presse.php">Papeterie</a></li>

		<li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>
		
	

	  <div class="vitrine_livre">
    <div class="presentoir_livre">
    <div class="couverure_livre"><a href="<?php echo $photo ?>" target="_blank"><img src="<?php echo $photo;?>" alt="couverture" class="livretab_livre"></a></div>
    <div class="flex_livre">
      <p><strong>Titre :</strong> <?php echo $titre;  ?></p>
      <p><strong>Auteur :</strong> <?php  echo $auteur; ?></p>
      <p><strong>Synopsis :</strong> <?php  echo $resume;  ?></p>
      

    </div>
    </div>
    
  </div>

<h1>Regardez aussi</h1>

<div class="conteneur_random">
		<div class="presentoir_carousel">
		<div class="couverure"><?php $ID=1; ?><a href="livre<?php echo $livre[1][1];?>.php"><img src="<?php echo $livre[$ID][4];?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php echo $livre[$ID][3];?></p><p><?php echo $livre[$ID][2];?></p></div>
		</div>
		<div class="presentoir_carousel">
		<div class="couverure"><?php $ID=2; ?><a href="livre<?php echo $livre[2][1];?>.php"><img src="<?php echo $livre[$ID][4];?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php echo $livre[$ID][3];?></p><p><?php echo $livre[$ID][2];?></p></div>
		</div>
		<div class="presentoir_carousel">
		<div class="couverure"><?php $ID=3; ?><a href="livre<?php echo $livre[3][1];?>.php"><img src="<?php echo $livre[$ID][4];?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php echo $livre[$ID][3];?></p><p><?php echo $livre[$ID][2];?></p></div>
		</div>
</div>
	







<?php include("footer.php"); ?>


</body>
</html>