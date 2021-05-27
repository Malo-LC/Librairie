<?php
session_start();
if(isset($_POST['mail'])==TRUE){
	$_SESSION['mail']=$_POST['mail'];
}


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=librairie;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
if (isset($_POST['nom'])==TRUE){
	$_SESSION['nom'] = $_POST['nom'];
	$nom = $_POST['nom'];
}
if (isset($_POST['prenom'])==TRUE){
	$_SESSION['prenom'] = $_POST['prenom'];
	$prenom = $_POST['prenom'];
}
if (isset($_POST['mail'])==TRUE){
	$_SESSION['email'] = $_POST['mail'];
	$mail = $_POST['mail'];
}
if (isset($_POST['mot_de_passe'])==TRUE){
	$_SESSION['mdp'] = $_POST['mot_de_passe'];
	$mdp = $_POST['mot_de_passe'];
}


$verif=TRUE;


$reponse = $bdd->query('SELECT * FROM coordonnee');
$donnees = $reponse->fetch();

do if(isset($mail)!=FALSE){
	if($donnees['Email']==$mail){
		$verif=FALSE;
	}
}
while($donnees = $reponse->fetch());


if($verif==FALSE){
	header('Location: redirection.php');
}



if(isset($mdp)==TRUE && isset($nom)==TRUE && isset($prenom)==TRUE && isset($mail)==TRUE && $verif==TRUE)
{
	$req = $bdd->prepare('INSERT INTO coordonnee(Nom, Prenom, Email, MDP) VALUES (:nom, :prenom, :mail, :mdp)'); 
	$req->execute(array(
	'nom' => $nom,
	'prenom' => $prenom,
	'mail' => $mail,
	'mdp' => $mdp
	));
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