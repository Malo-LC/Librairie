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

</head>


<body>

	<?php include("entete.php"); ?>

	<ul class="hotbar">
		<li class="toolbar active" ><a href="Acceuil.php">Accueil</a></li>
		<li class="toolbar"><a href="Librairie.php">Librairie</a></li>
		<li class="toolbar"><a href="Presse.php">Papeterie</a></li>
		<li class="toolbar left" style="float:right"><a href="Cadeaux.php">À propos</a></li>
    </ul>
		
	
    

<br>
<?php $path = $_SERVER['PHP_SELF']; // $path = /home/httpd/html/index.php
$file = basename ($path);
echo"$file"; // index.php ?>

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