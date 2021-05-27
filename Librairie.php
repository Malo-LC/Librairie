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

$livre = array_fill(1,$nb_id,array_fill(1,4,0));
do{
	if($donnees['ID']==$i){
		$livre[$i][1]=$i;
		$livre[$i][2]=$donnees['titre'];
		$livre[$i][3]=$donnees['auteur'];
		$livre[$i][4]=$donnees['photo'];
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
		<li class="toolbar " ><a href="Acceuil.php">Accueil</a></li>
		<li class="toolbar active"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Presse.php">Journaux</a></li>
		<li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>
		
	<br>
	<h1>Recherchez un livre :</h1>
    
 <div class="centre">
    <input id="searchbar" onkeyup="search_livre()" type="text"
        name="search" placeholder="Chercher un livre..">
      </div>
    
    <ol id='list'>
        <li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID=1; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
        <li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		<li class="livres">
        	<div class="presentoir">
				<div class="couverure">
					<img src="<?php $ID++; echo $livre[$ID][4];?>" alt="Livre" class="livretab">
					<div class="middle">
		    			<a href="livre<?php  echo $ID;?>.php"><div class="text">Voir</div></a>
		  			</div>
		  		</div>
				<div class="flex"><p class="recherche"><?php echo $livre[$livre[$ID][1]][3];?></p><p class="recherche"><?php echo $livre[$livre[$ID][1]][2];?></p></div>
			</div>
		</li>
		
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


		
		<style type="text/css">
			#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #2F2C57; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
		</style>
    </ol>
      
    <script type="text/javascript">
    	//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
    	
function search_livre() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('livres');
    let y = document.getElementsByClassName('recherche');
    for (i = 0; i < y.length; i+=2){
    	if(i+1!=y.length){
        if (!y[i].innerHTML.toLowerCase().includes(input) && !y[i+1].innerHTML.toLowerCase().includes(input)) {
        	j=i/2;
            x[j].style.display="none";
        }
        else {
        	j=i/2;
            x[j].style.display="block";
        }
        }
    }
}
    </script>



	

	
<br><br>





<?php include("footer.php"); ?>


</body>
</html>