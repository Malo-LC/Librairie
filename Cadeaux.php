<?php
session_start();

?>

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
}
while($donnees = $reponse->fetch());

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Librairie - Recherche</title>
    <link rel="stylesheet" type="text/css" href="stylelibrairie.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="icone.png">
    <LINK rel="stylesheet" type="text/css" href="barre_recherche.css" media="screen" />

</head>


<body>



	<?php include("entete.php"); ?>

	<ul class="hotbar">
		<li class="toolbar" ><a href="Acceuil.php">Accueil</a></li>
		<li class="toolbar"><a href="Presse.php">Presse</a></li>
		<li class="toolbar"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Carterie.php">Carterie</a></li>
		<li class="toolbar"><a href="Papeterie.php">Papeterie</a></li>
		<li class="toolbar left active" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>
		
	<div id="vitrine">
		<div class="presentoir">
		<div class="couverure"><a href="livre<?php echo $id1;?>.php"><img src="<?php $ID=1; echo $livre[$ID][4];?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php echo $livre[$livre[$ID][1]][3];?></p><p><?php echo $livre[$livre[$ID][1]][2]; ?></p></div>
		</div>
		<div class="presentoir">
		<div class="couverure"><a href="livre<?php echo $id1;?>.php"><img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php echo $livre[$livre[$ID][1]][3];?></p><p><?php echo $livre[$livre[$ID][1]][2]; ?></p></div>
		</div>
		<div class="presentoir">
		<div class="couverure"><a href="livre<?php echo $id1;?>.php"><img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab"></a></div>
		<div class="flex"><p><?php echo $livre[$livre[$ID][1]][3];?></p><p><?php echo $livre[$livre[$ID][1]][2]; ?></p></div>
		</div>
	</div>
    
 
    <input id="searchbar" onkeyup="search_livre()" type="text"
        name="search" placeholder="Chercher un livre..">
      
    
    <ol id='list'>
        <li class="livres"><a href="livre<?php $ID=1; echo $livre[$ID][1]; ?>.php"><?php echo $livre[$ID][2]; $ID++; ?></a></li>
        <li class="livres"><a href="livre<?php echo $livre[$ID][1]; ?>.php"><?php echo $livre[$ID][2]; $ID++; ?></a></li>
        <li class="livres"><a href="livre<?php echo $livre[$ID][1]; ?>.php"><?php echo $livre[$ID][2]; $ID++; ?></a></li>
    </ol>
      
    <script type="text/javascript">
    	
    	
function search_livre() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('livres');
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}
    </script>



	

	
<br><br>

<div id="conteneur">
	<p> A PROPOS DE LA LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p> A PROPOS DE LA LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p> A PROPOS DE LA LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p> A PROPOS DE LA LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p> A PROPOS DE LA LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<p> A PROPOS DE LA LIBRAIRIE </p>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</div>



<?php include("footer.php"); ?>


</body>
</html>