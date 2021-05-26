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
		<li class="toolbar"><a href="Presse.php">Presse</a></li>
		<li class="toolbar"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Carterie.php">Carterie</a></li>
		<li class="toolbar"><a href="Papeterie.php">Papeterie</a></li>
		<li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>
		
	
    







	  <div class="vitrine_livre">
    <div class="presentoir_livre">
    <div class="couverure_livre"><a href="<?php echo $photo ?>" target="_blank"><img src="<?php echo $photo;?>" alt="couverture" class="livretab_livre"></a></div>
    <div class="flex_livre">
      <p><strong>Titre :</strong> <?php echo $titre; ?></p>
      <p><strong>Auteur :</strong> <?php  echo $auteur; ?></p>
      <p><strong>Synopsis :</strong> <?php  echo $resume; ?></p>
      

    </div>
    </div>
    
  </div>





	







<?php include("footer.php"); ?>


</body>
</html>