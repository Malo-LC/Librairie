<?php
session_start();

if(isset($_POST['mail-connect'])==TRUE){
	$_SESSION['mail']=$_POST['mail-connect'];
}

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=librairie;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
if (isset($_POST['mot-de-passe-connect'])==TRUE){
	$mdp_c = $_POST['mot-de-passe-connect'];
}
if (isset($_POST['mail-connect'])==TRUE){
	$mail_c = $_POST['mail-connect'];
}
$verif=FALSE;


$reponse = $bdd->query('SELECT * FROM coordonnee');
$donnees = $reponse->fetch();

do{
	if($donnees['Email']==$mail_c){
		$verif=TRUE;
		$mdp=$donnees['MDP'];
		$_SESSION['email']=$donnees['Email'];
		$_SESSION['nom']=$donnees['Nom'];
		$_SESSION['prenom']=$donnees['Prenom'];

	}
}
while($donnees = $reponse->fetch());

if($verif==FALSE){
	header('Location: redirection_c.php');
}


if($mdp!=$mdp_c){
header('Location: redirection_c.php');
}








?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Votre Compte</title>
    <link rel="stylesheet" type="text/css" href="styleconnexion.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="icone.png">
    <meta name="viewport" content="width=device-width">
</head>
<body>
	<?php include("entete.php"); ?>
	
		
	<ul class="hotbar">
		<li class="toolbar active" ><a href="Acceuil.php">Accueil</a></li>
		<li class="toolbar"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Presse.php">Journaux</a></li>
		<li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>

    <h1>Connecté</h1>

		<div class="compte_oui">
    		<h1>Vos infos personnelles</h1>

    		<p><strong>Mail   :</strong> <?php echo $_SESSION['email']; ?> </p>
    		<p><strong>Nom    :</strong> <?php echo $_SESSION['nom']; ?> </p>
    		<p><strong>Prenom :</strong> <?php echo $_SESSION['prenom']; ?> </p>
    		
    	</div>
    	<input type="button" name="deco" class="deconnexion" value="Deconnexion" onclick="location.href='deconnect.php'">
    <h2></h2>

<?php include("footer.php"); ?>
    
</body>
</html>