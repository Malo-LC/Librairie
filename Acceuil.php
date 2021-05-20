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
		<li class="toolbar"><a href="Presse.php">Presse</a></li>
		<li class="toolbar"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Carterie.php">Carterie</a></li>
		<li class="toolbar"><a href="Papeterie.php">Papeterie</a></li>
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
}
while($donnees = $reponse->fetch());

?>

	
	

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
        <div class="element"><p class="carreblanc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie luctus justo sed vulputate. Sed luctus finibus sollicitudin. Pellentesque consectetur tempor elit quis facilisis. Quisque convallis dui turpis, in dapibus tellus suscipit quis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec rhoncus tincidunt mauris, a lobortis dui luctus nec. Nulla volutpat ac justo quis sagittis. Maecenas sit amet est in magna semper ullamcorper. Donec nunc ex, condimentum in nisi pellentesque, mattis laoreet eros. Nullam sit amet ligula dignissim elit ullamcorper laoreet. Ut pulvinar imperdiet nunc, eu semper massa vulputate et. Duis at hendrerit urna, eu malesuada justo. Phasellus sit amet lectus quis nunc iaculis feugiat.</p></div>
        <div class="element"><p class="carreblanc">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed eu auctor elit. Mauris sem risus, sodales a dapibus eu, pellentesque vitae nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam lobortis pharetra sapien, quis lacinia neque sodales quis. Maecenas vestibulum purus sit amet ligula malesuada blandit. Proin vestibulum ullamcorper lorem, et semper libero ornare nec. Suspendisse porttitor iaculis fringilla. Nulla facilisi. Fusce tempus euismod ligula. Morbi viverra ligula sed diam fringilla, non ornare risus euismod. Nam laoreet nec dolor sit amet bibendum. Phasellus egestas placerat consequat.</p></div>
        <div class="element"><p class="carreblanc">Vestibulum interdum placerat auctor. Vestibulum elementum ullamcorper arcu eget vestibulum. Duis sit amet nibh bibendum odio interdum dapibus sed id ipsum. Ut tincidunt pellentesque dolor ut tincidunt. Praesent sed aliquet quam, ut molestie nulla. Cras rutrum, nibh in molestie pretium, diam mi dignissim libero, et semper elit mauris non tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus vulputate eros est, a auctor felis consequat eget.</p></div>
        <div class="element"><p class="carreblanc">Integer quis consectetur tellus. Quisque ac mollis tortor. Nullam sed tortor commodo, hendrerit augue non, pharetra felis. Sed vitae efficitur eros. Fusce cursus semper urna eu consequat. In nec sapien a metus porttitor finibus. Donec semper diam id lacus blandit ullamcorper id id ligula. Phasellus faucibus dui non sem bibendum, vitae facilisis massa pulvinar. Donec pharetra scelerisque magna, at luctus quam elementum et. Curabitur pretium metus bibendum, dignissim sapien ac, scelerisque lacus.</p></div>
        
</div>
<div id="conteneur">
        <div class="element"><p class="carreblanc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie luctus justo sed vulputate. Sed luctus finibus sollicitudin. Pellentesque consectetur tempor elit quis facilisis. Quisque convallis dui turpis, in dapibus tellus suscipit quis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec rhoncus tincidunt mauris, a lobortis dui luctus nec. Nulla volutpat ac justo quis sagittis. Maecenas sit amet est in magna semper ullamcorper. Donec nunc ex, condimentum in nisi pellentesque, mattis laoreet eros. Nullam sit amet ligula dignissim elit ullamcorper laoreet. Ut pulvinar imperdiet nunc, eu semper massa vulputate et. Duis at hendrerit urna, eu malesuada justo. Phasellus sit amet lectus quis nunc iaculis feugiat.</p></div>
        <div class="element"><p class="carreblanc">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed eu auctor elit. Mauris sem risus, sodales a dapibus eu, pellentesque vitae nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam lobortis pharetra sapien, quis lacinia neque sodales quis. Maecenas vestibulum purus sit amet ligula malesuada blandit. Proin vestibulum ullamcorper lorem, et semper libero ornare nec. Suspendisse porttitor iaculis fringilla. Nulla facilisi. Fusce tempus euismod ligula. Morbi viverra ligula sed diam fringilla, non ornare risus euismod. Nam laoreet nec dolor sit amet bibendum. Phasellus egestas placerat consequat.</p></div>
        <div class="element"><p class="carreblanc">Vestibulum interdum placerat auctor. Vestibulum elementum ullamcorper arcu eget vestibulum. Duis sit amet nibh bibendum odio interdum dapibus sed id ipsum. Ut tincidunt pellentesque dolor ut tincidunt. Praesent sed aliquet quam, ut molestie nulla. Cras rutrum, nibh in molestie pretium, diam mi dignissim libero, et semper elit mauris non tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus vulputate eros est, a auctor felis consequat eget.</p></div>
        <div class="element"><p class="carreblanc">Integer quis consectetur tellus. Quisque ac mollis tortor. Nullam sed tortor commodo, hendrerit augue non, pharetra felis. Sed vitae efficitur eros. Fusce cursus semper urna eu consequat. In nec sapien a metus porttitor finibus. Donec semper diam id lacus blandit ullamcorper id id ligula. Phasellus faucibus dui non sem bibendum, vitae facilisis massa pulvinar. Donec pharetra scelerisque magna, at luctus quam elementum et. Curabitur pretium metus bibendum, dignissim sapien ac, scelerisque lacus.</p></div>
        
</div>

<div id="conteneur">
        <div class="element"><p class="carreblanc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin molestie luctus justo sed vulputate. Sed luctus finibus sollicitudin. Pellentesque consectetur tempor elit quis facilisis. Quisque convallis dui turpis, in dapibus tellus suscipit quis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec rhoncus tincidunt mauris, a lobortis dui luctus nec. Nulla volutpat ac justo quis sagittis. Maecenas sit amet est in magna semper ullamcorper. Donec nunc ex, condimentum in nisi pellentesque, mattis laoreet eros. Nullam sit amet ligula dignissim elit ullamcorper laoreet. Ut pulvinar imperdiet nunc, eu semper massa vulputate et. Duis at hendrerit urna, eu malesuada justo. Phasellus sit amet lectus quis nunc iaculis feugiat.</p></div>
        <div class="element"><p class="carreblanc">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed eu auctor elit. Mauris sem risus, sodales a dapibus eu, pellentesque vitae nisi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam lobortis pharetra sapien, quis lacinia neque sodales quis. Maecenas vestibulum purus sit amet ligula malesuada blandit. Proin vestibulum ullamcorper lorem, et semper libero ornare nec. Suspendisse porttitor iaculis fringilla. Nulla facilisi. Fusce tempus euismod ligula. Morbi viverra ligula sed diam fringilla, non ornare risus euismod. Nam laoreet nec dolor sit amet bibendum. Phasellus egestas placerat consequat.</p></div>
        <div class="element"><p class="carreblanc">Vestibulum interdum placerat auctor. Vestibulum elementum ullamcorper arcu eget vestibulum. Duis sit amet nibh bibendum odio interdum dapibus sed id ipsum. Ut tincidunt pellentesque dolor ut tincidunt. Praesent sed aliquet quam, ut molestie nulla. Cras rutrum, nibh in molestie pretium, diam mi dignissim libero, et semper elit mauris non tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus vulputate eros est, a auctor felis consequat eget.</p></div>
        <div class="element"><p class="carreblanc">Integer quis consectetur tellus. Quisque ac mollis tortor. Nullam sed tortor commodo, hendrerit augue non, pharetra felis. Sed vitae efficitur eros. Fusce cursus semper urna eu consequat. In nec sapien a metus porttitor finibus. Donec semper diam id lacus blandit ullamcorper id id ligula. Phasellus faucibus dui non sem bibendum, vitae facilisis massa pulvinar. Donec pharetra scelerisque magna, at luctus quam elementum et. Curabitur pretium metus bibendum, dignissim sapien ac, scelerisque lacus.</p></div>
        
</div>



<?php include("footer.php"); ?>


</body>
</html>