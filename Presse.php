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
$reponse = $bdd->query('SELECT * FROM journaux');
$donnees = $reponse->fetch();
$reponse1 = $bdd->query('SELECT * FROM journaux');
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
		$livre[$i][4]=$donnees['photo'];
		$livre[$i][5]=$donnees['resume'];
	}
	$i++;
}
while($donnees = $reponse->fetch());

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Presse - Recherche</title>
    <link rel="stylesheet" type="text/css" href="stylelibrairie.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="icone.png">
    <LINK rel="stylesheet" type="text/css" href="barre_recherche.css" media="screen" />

</head>


<body>



	<?php include("entete.php"); ?>

	<ul class="hotbar">
		<li class="toolbar " ><a href="Acceuil.php">Accueil</a></li>
		<li class="toolbar " ><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar active"><a href="Presse.php">Papeterie</a></li>
		<li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>
		
	<br>
	<h1>Recherchez un magazine :</h1>
    
 <div class="centre">
    <input id="searchbar" onkeyup="search_livre()" type="text"
        name="search" placeholder="Chercher un magazine..">
      </div>
    
    <ol id='list'>
        <li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID=1; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
        <li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="magazine<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		
		
		

		

    </ol>
      
    <script type="text/javascript">
    	
    	
function search_livre() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('livres');
    let y = document.getElementsByClassName('recherche');
    for (i = 0; i < y.length; i++) { 
    	
        if (!y[i].innerHTML.toLowerCase().includes(input)) {
        	j=i;
            x[j].style.display="none";
        }
        else {
        	j=i;
            x[j].style.display="block";
        }
        
    }
}
    </script>



	

	
<br><br>





<?php include("footer.php"); ?>


</body>
</html>